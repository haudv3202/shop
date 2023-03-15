<?php
namespace App\admin\controllers;
use App\models\ProdcutModel as Product;
use App\models\CategoriesModel as Categories;
use App\boostrap\boostrap as Boot;
@session_start();
class ProductsController {
    protected $Product;
    protected $boot;
    protected  $cate;
    public function __construct(){
        $this->Product = new Product();
        $this->boot = new Boot();
        $this->cate = new Categories();
    }
    public function index() {
        $allProducts = Product::allData();
        $view = "./views/screen/admin/Products.php";
        require_once('./views/management/index_master.php');
    }

    public function addProduct() {
        $error = [];
        $data_old = [];
        $allCate = Categories::allData();
        if(isset($_POST['btnProducts'])){
            $fillerData = $this->boot->validate([
                "Name_product" => "required",
                "Price" => "required",
                "cate_id" => "required",
                "Short_Des" => "required",
                "Detail" => "required",
            ],"POST");
            $fillerData['data'][] = $_POST['sale'];
            $fileImg = $this->boot->validateFile('fileUpload');

            if($fileImg[0] == 0){
                $fillerData['error'][$fileImg[2]][] = $fileImg[1];
            }else{
                $fillerData['data'][] = $fileImg[1];
            }
            $error[] = $fillerData['error'];
            $fillerData['data'] = array_values($fillerData['data']);
            $data_old = $fillerData['data'];

            if(empty($fillerData['error'])){
                $this->Product->create($fillerData['data']);
                $_SESSION['success_add'] = 'Tạo sản phẩm thành công!';
            }
        }

        $view = "./views/screen/admin/AddProduct.php";
        require_once('./views/management/index_master.php');
    }


    public function editCate() {
        $error = [];
        $data_old = [];
        $id = $_GET['id'];
        $allCate = Categories::allData();
        $data =  $this->Product->view($id);

        if(isset($_POST['btnProducts'])){
            $fillerData = $this->boot->validate([
                "Name_product" => "required",
                "cate_id" => "required",
                "Price" => "required",
                "Short_Des" => "required",
                "Detail" => "required",
            ],"POST");
            $fileImg = $this->boot->validateFile('fileUpload');

            if($fileImg[0] == 1){
                $fillerData['data'][] = $fileImg[1];
            }else{
                $fillerData['data'][] = $data->img;
            }

            $error[] = $fillerData['error'];
            $fillerData['data'] = array_values($fillerData['data']);
            $data_old = $fillerData['data'];
            if(empty($fillerData['error'])){
                $fillerData['data'][] = $id;
//                echo "<pre>";
//                print_r($fillerData);
//                die();
                $this->Product->update($fillerData['data']);
                $_SESSION['success_editupdate'] = 'Cập nhật sản phẩm thành công!';
            }
        }
        $view = "./views/screen/admin/EditProducts.php";
        require_once('./views/management/index_master.php');
    }

    public function delete() {
        $id = $_GET['id'];
        $img =  $this->Product->view($id)->img;
        $pathimg = "./public/backend/upload/".$img;
        if (file_exists($pathimg))
        {
            unlink($pathimg);
            $this->Product->delete($id);
        }
        $_SESSION['success_categories'] = 'Xóa item thành công!';
        header('location:products');
    }
}