<?php
namespace App\admin\controllers;
use App\boostrap\boostrap as Boot;
@session_start();

class DasboardController {
    protected $boot;
    public function __construct(){
            $this->boot = new Boot();
    }


    public function index() {
        $view = "./views/screen/admin/home.php";
        require_once('./views/management/index_master.php');
    }

    public function profile() {
        $view = "./views/screen/admin/profile.php";
        require_once('./views/management/index_master.php');
    }

    public function EditProfile(){
        $view = "./views/screen/admin/EditProfile.php";
        require_once('./views/management/index_master.php');
    }

    public function logout(){
        $_SESSION['logout_message'] = "Đăng xuất thành công";
        unset($_SESSION['auth_user']);
        header('Location: ../login');
    }
}