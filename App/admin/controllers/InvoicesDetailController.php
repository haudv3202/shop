<?php
namespace App\admin\controllers;
use App\models\ProdcutModel as Product;
use App\models\CategoriesModel as Categories;
use App\boostrap\boostrap as Boot;
use App\models\InvoicesModel;
use App\models\InvoicesDetailModel;
@session_start();
class  InvoicesDetailController {
    protected $invoicesDetail;
    protected $Product;
    protected $invoited;
    public function __construct() {
        $this->invoicesDetail = new InvoicesDetailModel();
        $this->Product = new Product();
        $this->invoited = new InvoicesModel();
    }
    public function Detail_Invoices() {
        $id = $_GET['id'];
//        print_r($id);
//        die();
        $data = $this->invoicesDetail->view([$id]);
//
        $total = 0;
        $sale = 0;
        foreach ($data as $value){
            $value->total = $value->unit_price * $value->quantity;
            $total += $value->unit_price * $value->quantity;
            $sale = $total - ((100 - $this->Product->view($value->product_id)->sale)/100 * $total);
        }
        $person =  $this->invoited->view($id);
        $view = "./views/screen/admin/invoices_detail.php";
        require_once('./views/management/index_master.php');
    }
}