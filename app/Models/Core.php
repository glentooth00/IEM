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

    public function store($table, $data){

        

    }

    public function test(){

        echo 'core test method here';

    }



}