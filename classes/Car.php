<?php
require_once "QueryBuilder.php";
require_once "User.php";
class Car extends QueryBuilder {
    public $id;
    public $marka;
    public $model;
    public $cena;
    public $koriscen;
    public $info;
    public $slika;
    public $korisnik_id;

    public function getUser() {
        return User::getById($this->korisnik_id, 'users', 'User');
    }
    public static function getAll() {
        $db = Database::getInstance();
        $query = "SELECT * FROM cars";
        $cars = $db->select('Car', $query);
        return $cars;
    }
    public static function addCar($marka, $model, $cena, $koriscen, $info, $slika, $korisnik_id) {
        $db = Database::getInstance();
        $query = "INSERT INTO cars (marka, model, cena, koriscen, info, slika, korisnik_id) VALUES (:m, :md, :c, :k, :i, :s, :kid)";
        $params = [
            ":m" => $marka,
            ":md" => $model,
            ":c" => $cena,
            ":k" => $koriscen,
            ":i" => $info, 
            ":s" => $slika,
            ":kid" => $korisnik_id
        ];
        $db->insert('Car', $query, $params);
        return $db->lastInsertId();
    }
    public static function oneCar($id) {
        $db = Database::getInstance();
        $query = "SELECT * FROM cars WHERE id = :id";
        $params = [":id" => $id];
        $car = $db->select('Car', $query, $params);
        return $car;
    }
    public static function oneUserCar($korisnik_id) {
        $db = Database::getInstance();
        $query = "SELECT * FROM cars WHERE korisnik_id = :kid";
        $params = [":kid" => $korisnik_id];
        $car = $db->select('Car', $query, $params);
        return $car;
    }
    public static function search($marka, $model, $cena) {
        $db = Database::getInstance();
        $query = "SELECT * FROM cars WHERE marka LIKE '%$marka%'
        OR model LIKE '%$model%' OR cena LIKE '%$cena%'";
        $result = $db->select('Car', $query);
        return $result;
    }
    public static function deleteCar($id) {
		$db = Database::getInstance();
		$query = 'DELETE FROM cars WHERE id = :id';
		$params = [
			':id' => $id
		];
		$db->delete($query, $params);
	}
    
    
}


?>