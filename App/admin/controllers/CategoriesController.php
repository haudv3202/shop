<?php
namespace App\admin\controllers;
@session_start();
use App\models\CategoriesModel as Categories;
use App\models\UserModel as User;
use App\boostrap\boostrap as Boot;
use App\models\ProdcutModel as Product;
class CategoriesController {
    protected $Categories;
    protected $user;
    protected $boot;
    protected $Product;
    public function __construct() {
        $this->Categories = new Categories();
        $this->user = new User();
        $this->boot = new boot();
        $this->Product = new Product();
    }
    public function index() {
        $allCategories = Categories::allData();
        $view = "./views/screen/admin/Categories.php";
        require_once('./views/management/index_master.php');
    }


    public function addCategory() {
        $error = [];
        $data_old = [];
        if(isset($_POST['btnsubcate'])){
            $fillerData = $this->boot->validate([
                "name_Cate" => "required|unique:categories:cate_name",
                "Slug" => "required",
                "Desc" => "required",
            ],"POST");
            $error[] = $fillerData['error'];
            $fillerData['data'] = array_values($fillerData['data']);
            $data_old = $fillerData['data'];

            if(empty($fillerData['error'])){
                $fillerData['data'][] = $_SESSION['auth_user'][0]->id;
                $this->Categories->create($fillerData['data']);
                $_SESSION['success_categories'] = 'Tạo danh mục thành công!';
                $_SESSION['url'] = 'categories';
            }
        }
        $view = "./views/screen/admin/AddCategories.php";
        require_once('./views/management/index_master.php');
    }


    public function editCate() {
        $error = [];
        $data_old = [];
        $id = $_GET['id'];
        $data =  $this->Categories->view($id);
        if(isset($_POST['btneditCate'])){
            $fillerData = $this->boot->validate([
                "name_Cate" => "required",
                "Slug" => "required",
                "Desc" => "required",
            ],"POST");
            $error[] = $fillerData['error'];
            $fillerData['data'] = array_values($fillerData['data']);
            $data_old = $fillerData['data'];
            if(empty($fillerData['error'])){
                $fillerData['data'][] = $id;
                $this->Categories->update($fillerData['data']);
                $_SESSION['success_categories'] = 'Cập nhật danh mục thành công!';
                $_SESSION['url'] = 'categories';
            }
        }
        $view = "./views/screen/admin/EditCategorie.php";
        require_once('./views/management/index_master.php');
    }

    public function delete() {
        $id = $_GET['id'];
        $this->Categories->delete($id);
        $this->Product->deleteCate($id);
        $_SESSION['success_categories'] = 'Xóa item thành công!';
        header('location:categories');
    }

}