<?php 
namespace App\Controllers;
use App\Models\User;

class TestController {

    public function testMode(){
        return ( new User )->testCore();
    }

}