<?php
namespace App\controllers;
use App\boostrap\boostrap as boot;
use App\models\UserModel as User;
use App\models\ProdcutModel as Product;
use App\models\InvoicesDetailModel;
use App\models\InvoicesModel as Invoice;
@session_start();

class UserController {
    protected $boot;
    protected $user;
    protected $Product;
    protected $Invoice;
    protected $Invoice_detail;
    public function __construct() {
        $this->boot = new boot();
        $this->user = new User();
        $this->Product = new Product();
        $this->Invoice = new Invoice();
        $this->Invoice_detail = new InvoicesDetailModel();
    }


    public function index(){
        $data = Product::allData();
        $view = "./views/screen/homeUser.php";
        require_once('./views/User/index_master_user.php');
    }

    public function add_avoices(){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $data = $this->Product->view($id);
            if(!isset($_SESSION['cart'])){
                $cart[$id] = [
                    "id" =>$data->id,
                    "name" => $data->name,
                    'image' => $data->img,
                    'price' => (100 - $data->sale)/100 * $data->price,
                    'number'=>1
                ];
            }else {
                $cart =  $_SESSION['cart'];
                if (array_key_exists($id,$cart)){
                    $cart[$id] = [
                        "id" =>$data->id,
                        "name" => $data->name,
                        'image' => $data->img,
                        'price' => (100 - $data->sale)/100 * $data->price,
                        'number'=>$cart[$id]['number']+1
                    ];
                }else {
                    $cart[$id] = [
                        "id" =>$data->id,
                        "name" => $data->name,
                        'image' => $data->img,
                        'price' => (100 - $data->sale)/100 * $data->price,
                        'number'=>1
                    ];
                }
            }
            $_SESSION['cart'] = $cart;

            $number = 0;
            $total = 0;
            foreach ($cart as $value){
                $number += $value['number'];
                $total += $value['number'] * $value['price'];
            }
            $a = json_encode([$_SESSION['cart'],[$number,number_format($total)]]);
            echo $a;

        }
    }

    public function removeCart(){
        $id = $this->boot->request('id','GET');
        unset($_SESSION['cart'][$id]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        header('location:home');
    }

    public function shop(){
        $data = Product::allData();
        $view = "./views/screen/shop.php";
        require_once('./views/User/index_master_user.php');
    }

    public function blog(){
        $view = "./views/screen/blog.php";
        require_once('./views/User/index_master_user.php');
    }

    public function contact(){
        $view = "./views/screen/contact.php";
        require_once('./views/User/index_master_user.php');
    }

    public function about(){
        $view = "./views/screen/about.php";
        require_once('./views/User/index_master_user.php');
    }

    public function profile(){
        $view = "./views/screen/profile.php";
        require_once('./views/User/index_master_user.php');
    }

    public function checkout(){
        $_SESSION['total'] = 0;
        foreach($_SESSION['cart'] as $value){
            $_SESSION['total'] += $value['number'] * $value['price'];
        }
        $view = "./views/screen/checkout.php";
        require_once('./views/User/index_master_user.php');
    }

    public function order(){
        $errors = [];
        if(isset($_POST['btn_order'])){
            $fillerData = $this->boot->validate([
                "name" => "required",
                "mobile" => "required",
                "email" => "required|Email",
            ],"POST");
            $fillerData['data'][] = 'PayPal';
            $fillerData['data'][] = $_SESSION['total'];
            $fillerData['data'][] = $this->boot->request('des','POST');

            if(empty($fillerData['error'])){
                $id = $this->Invoice->create($fillerData['data']);
                foreach ($_SESSION['cart'] as $value){
                $dataIvoid[] = [$id,$value['id'],$value['number'],$value['price']];

                }
                foreach ($dataIvoid as $value){
                    $this->Invoice_detail->create($value);
                }
                $_SESSION['id'] = $id;
                header('location:odersucces');

            }else {
                $errors = $fillerData['error'];
            }
        }
        $view = "./views/screen/checkout.php";
        require_once('./views/User/index_master_user.php');

    }

    public function orderSuccess(){
        unset($_SESSION['cart']);
        $view = "./views/screen/complete.php";
        require_once('./views/User/index_master_user.php');
    }

    public function product_detail(){
        $id = $_GET['id'];
        $_SESSION['dataOne'] = $this->Product->view($id);
        $id_cate = $_SESSION['dataOne']->cate_id;
        $productRamdom = $this->Product->ramdomProducts($id_cate);
        $view = "./views/screen/product_detail.php";
        require_once('./views/User/index_master_user.php');
    }

    public function login(){
        $errors = [];
        $data_old = [];
        if(isset($_POST['BtnLogin'])){
            $fillerData = $this->boot->validate([
                "username" => "required",
                "password" => "required"
            ],"POST");
            $data_old = $fillerData['data'];
            $fillerData['data'] = array_values($fillerData['data']);

            if(empty($fillerData['error'])){
                $result = $this->checkLogin($fillerData['data'][0]);

                foreach($result as $data) {
                    if(password_verify($fillerData['data'][1],$data->password)){
                        $_SESSION['auth_user'] = $result;
                        $_SESSION['success_message'] = 'Đăng nhập thành công!';

                    }
                }
            }else {
                $errors = $fillerData['error'];
//                print_r($errors);
//                die();
            }
        }
       require_once('./views/screen/login.php');
    }

    public function register(){
        $errors = [];
        $data_old = [];
        if(isset($_POST['submitBtn'])){
            $fillerData = $this->boot->validate([
                "fullname" => "required",
                "username" => "required|unique:users:username",
                "email" => "required|Email|unique:users:email",
                "password" => "required|password"
            ],"POST");
            $data_old = $fillerData['data'];
            $fillerData['data'] = array_values($fillerData['data']);
//            echo "<pre>";
//            print_r($fillerData);
//            die();
            if(empty($fillerData['error'])){
                $fillerData['data'] = array_values($fillerData['data']);
                $fillerData['data'][3] = password_hash($fillerData['data'][3], PASSWORD_BCRYPT);
                $fillerData['data'][] = 1;
//                            echo "<pre>";
//            print_r($fillerData);
//            die();
                $this->user->create($fillerData['data']);
                $_SESSION['success_message'] = 'Đăng kí thành công!';
            }else {
                $errors = $fillerData['error'];
                print_r($errors);
                die();
            }
        }
        require_once('./views/screen/register.php');
    }

    public function checkLogin($username){
        return $this->user->checkLogin($username);
    }

    public function logout(){
        $_SESSION['logout_message'] = "Đăng xuất thành công";
        unset($_SESSION['auth_user']);
        header('Location:login');
    }
}