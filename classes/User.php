<?php
require_once "QueryBuilder.php";
class User extends QueryBuilder {

    public $id;
    public $username;
    public $password;
    public $email;
    public $ime_prezime;
    public $slika;

    public $register_result = NULL;   

    public static function registerUser($username, $password, $email, $ime_prezime, $slika) {
        $db = Database::getInstance();
        $query = "INSERT INTO users (username, password, email, ime_prezime, slika) VALUES (:u, :p, :e, :ip, :s)";
        $params = [
            ":u" => $username,
            ":p" => $password,
            ":e" => $email,
            ":ip" => $ime_prezime,
            ":s" => $slika
        ];
        try {
            $db->insert('User', $query, $params);
        } catch (Exception $e) {
            return false;
        }
        return $db->lastInsertId();  
    }
    public static function login($username, $password) {
        $db = Database::getInstance();
        $query = "SELECT * FROM users WHERE username = :u AND password = :p";
        $params = [
            ":u" => $username,
            ":p" => $password
        ];
        $users = $db->select('User', $query, $params);
        if (!empty($users)) {
            return $users[0];
        } else {
            return null;
        }
    }
}
