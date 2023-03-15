<?php
namespace App\controllers;

class controller {
    public function view($path, $data = [])
    {
        extract($data);
        include_once __DIR__ . "/../../resources/views/$path.php";
        require_once('./views/User/index_master_user.php');
    }

}