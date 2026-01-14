<?php 

namespace App\Models;

use App\Models\Core;

class User extends Core{

    public $table = 'users';

    public function testCore(){
        return Core::test();
    }

    public function createUser($data){
        return Core::store($data, $this->table);
    }
    


}
