<?php
session_start();

include_once __DIR__ . '/../../../vendor/autoload.php';

use App\Controllers\UserController;

    $i = ( new UserController )->createUSer([
        'firstname' => $_POST['firstname'],
        'middlename' => $_POST['middlename'],
        'lastname' => $_POST['lastname'],
        'username' => $_POST['username'],
        'password' => md5($_POST['password']),
        'created_at' => date('Y-m-d H:i:s'),
        'status'=> 'active'
    ]);

    // move_uploaded_file(
    //     $_FILES['user_image']['tmp_name'],
    //     '../../../public/assets/images/user_images/' . $_FILES['user_image']['name']
    //     );

?>