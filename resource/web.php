<?php
@session_start();
use App\admin\controllers\DasboardController;
use App\boostrap\Router;
use App\controllers\UserController;
use App\admin\controllers\CategoriesController;
use App\admin\controllers\ProductsController;
use App\admin\controllers\InvoicesController;
use App\admin\controllers\InvoicesDetailController;
$router = new Router;

Router::get('/', [UserController::class, 'index']);
Router::post('/', [UserController::class, 'add_avoices']);
//user
Router::get('/home', [UserController::class, 'index']);
//Router::post('/home', [UserController::class, 'add_avoices']);
Router::get('/profile', [UserController::class, 'profile']);


Router::get('/checkout', [UserController::class, 'checkout']);
Router::post('/checkout', [UserController::class, 'order']);

Router::get('/shop', [UserController::class, 'shop']);
Router::get('/product_detail', [UserController::class, 'product_detail']);
Router::get('/removeCart', [UserController::class, 'removeCart']);
Router::get('/odersucces', [UserController::class, 'orderSuccess']);
Router::post('/product_detail', [UserController::class, 'add_avoices']);
Router::get('/blog', [UserController::class, 'blog']);
Router::get('/about', [UserController::class, 'about']);
Router::get('/contact', [UserController::class, 'contact']);
Router::get('/logout', [UserController::class, 'logout']);
//end



Router::get('/login', [UserController::class, 'login']);
Router::post('/login', [UserController::class, 'login']);

if(isset($_SESSION['auth_user'][0]->role_id ) && $_SESSION['auth_user'][0]->role_id == 2){
    Router::get('/admin/', [DasboardController::class, 'index']);
    Router::get('/admin/profile', [DasboardController::class, 'profile']);
    Router::get('/admin/updateInfo', [DasboardController::class, 'EditProfile']);

    Router::get('/admin/categories', [CategoriesController::class, 'index']);
    Router::get('/admin/cateAdd', [CategoriesController::class, 'addCategory']);
    Router::post('/admin/cateAdd', [CategoriesController::class, 'addCategory']);
    Router::get('/admin/editCategories', [CategoriesController::class, 'editCate']);
    Router::post('/admin/editCategories', [CategoriesController::class, 'editCate']);
    Router::get('/admin/deleteItem', [CategoriesController::class, 'delete']);

    Router::get('/admin/products', [ProductsController::class, 'index']);
    Router::get('/admin/AddProducts', [ProductsController::class, 'addProduct']);
    Router::post('/admin/AddProducts', [ProductsController::class, 'addProduct']);
    Router::get('/admin/EditProducts', [ProductsController::class, 'editCate']);
    Router::post('/admin/EditProducts', [ProductsController::class, 'editCate']);
    Router::get('/admin/Productdelete', [ProductsController::class, 'delete']);


    Router::get('/admin/invoices', [InvoicesController::class, 'index']);
    Router::get('/admin/InvoicedDelete', [InvoicesController::class, 'delete']);

    Router::get('/admin/detailBill', [InvoicesDetailController::class, 'Detail_Invoices']);
    Router::get('/admin/logout', [DasboardController::class, 'logout']);
}




$router->resolve();