<?php
namespace App\admin\controllers;
use App\models\InvoicesModel;
use App\models\InvoicesDetailModel;
@session_start();

class InvoicesController {
    protected $invoiced;
    protected $invoicedDetail;
    public function __construct() {
        $this->invoiced = new InvoicesModel();
        $this->invoicedDetail = new InvoicesDetailModel();;
    }
    public function index() {
        $allInvoices = InvoicesModel::allData();
        $view = "./views/screen/admin/invoices.php";
        require_once('./views/management/index_master.php');
    }

    public function delete(){
        $id = $_GET['id'];
        $this->invoiced->delete($id);
        $this->invoicedDetail->delete($id);
        $_SESSION['success_categories'] = 'Xóa Hóa đơn thành công!';
        header('location:invoices');
    }
}