<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

















// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/login', [HomeController::class,'login'])->name('login');
Route::get('/register', [HomeController::class,'register'])->name('register');
Route::get('/account', [HomeController::class,'account'])->name('account');

Route::get('/account-manage-address', [HomeController::class,'account_manage_address'])->name('account_manage_address');
Route::get('/account-my-reviews', [HomeController::class,'account_my_reviews'])->name('account_my_reviews');
Route::get('/account-order-cancel', [HomeController::class,'account_order_cancel'])->name('account_order_cancel');
Route::get('/account-order-details', [HomeController::class,'account_order_details'])->name('account_order_details');
Route::get('/account-order-history', [HomeController::class,'account_order_history'])->name('account_order_history');
Route::get('/account-profile-info', [HomeController::class,'account_profile_info'])->name('account_profile_info');
Route::get('/account-review-details', [HomeController::class,'account_review_details'])->name('account_review_details');
Route::get('/forgot-password', [HomeController::class,'forgot_password'])->name('forgot_password');
Route::get('/order-completed', [HomeController::class,'order_completed'])->name('order_completed');
Route::get('/payment', [HomeController::class,'payment'])->name('payment');
Route::get('/product-view', [HomeController::class,'product_view'])->name('product_view');
Route::get('/shop-grid/{id?}', [HomeController::class,'shop_grid'])->name('shop_grid');
Route::get('/shopping-cart', [HomeController::class,'shopping_cart'])->name('shopping_cart');
Route::get('/wish-list', [HomeController::class,'wish_list'])->name('wish_list');
Route::get('/checkout', [HomeController::class,'checkout'])->name('checkout');



////////////////////////admin///////checkout


///admin/////////



















Route::get('/admin', [AdminController::class,'admin'])->name('admin.login');

Route::post('/admin/login', [AdminController::class,'makelogin'])->name('admin.makelogin');



Route::group(['middleware' => 'auth'] ,function () {


});

Route::get('/admin/logout', [AdminController::class,'logout'])->name('admin.logout');


Route::get('/admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');

Route::get('/admin/profile', [AdminController::class,'Profile'])->name('admin.profile');
Route::get('/admin/locked', [AdminController::class,'locked'])->name('admin.locked');

Route::get('/admin/product', [ProductController::class,'index'])->name('admin.product');
Route::get('/admin/add-products', [ProductController::class,'create'])->name('admin.add_products');
Route::post('/admin/add-products', [ProductController::class,'store'])->name('admin.add_products');
Route::get('/admin/product-edit/{id?}', [ProductController::class,'edit'])->name('admin.product_edit');

Route::post('/admin/product-update/{id}', [ProductController::class,'update'])->name('admin.product_update');

Route::get('/admin/product-delete/{id}', [ProductController::class,'destroy'])->name('admin.product_delete');


Route::get('/admin/product-detail', [ProductController::class,'product_detail'])->name('admin.product_detail');


Route::get('/admin/product-cart', [AdminController::class,'product_cart'])->name('admin.product_cart');
Route::get('/admin/product-checkout', [AdminController::class,'product_checkout'])->name('admin.product_checkout');
Route::get('/admin/product-orders', [AdminController::class,'product_orders'])->name('admin.product_orders');


Route::get('/admin/category-list', [CategoryController::class,'index'])->name('admin.category_list');
Route::post('/admin/category-list', [CategoryController::class,'store'])->name('admin.store');
Route::post('/admin/category-update/{id}', [CategoryController::class,'update'])->name('admin.update_categorys');
Route::get('/admin/category-delete/{id}', [CategoryController::class,'destroy'])->name('admin.category_delete');


Route::get('/admin/sub-category-list', [CategoryController::class,'Sub_category_list'])->name('admin.Sub_category_list');

