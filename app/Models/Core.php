<?php 
namespace App\Models;

use App\Config\Database;
use PDO;

class Core {

    public  $sql;

    public $db;

    public $table;

    public function __construct() {

        $this->db = Database::connect();

    }

    public function store(array $data, $table){

        $columns = array_keys($data);

        $placeholders = array_map(fn($col) => ':' .  $col, $columns);

        $i = implode(', ', $columns);

        $e = implode(', ', $placeholders);

        $sql = "INSERT INTO {$table} ({$i}) VALUES  ({$e})";

        $stmt= $this->db->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }

        return $stmt->execute();

    }

    public function test(){

        echo 'core test method here';

    }



}