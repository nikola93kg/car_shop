<?php
require_once __DIR__ . '/../includes/Database.php';
require_once __DIR__ . '/../config.php';

class QueryBuilder {
    public static function getById($id, $table, $class) {
        $db = Database::getInstance();
        $sql = "SELECT * FROM $table WHERE id = :id";
        $params = [
            ":id" => $id
        ];
        $result = $db->select($class, $sql, $params);
        foreach ($result as $r) {
            return $r;
        } return null;
    }
    public static function selectAll($class, $table) { //napravi istancu ove klase $query= new QueryBuilder(tabela) pa odatle izvlacis -> metodu selectAll
        $db = Database::getInstance();
        $sql = "SELECT * FROM {$table}";
        $result = $db->select($class, $sql);
        return $result;
    }   
}


?>