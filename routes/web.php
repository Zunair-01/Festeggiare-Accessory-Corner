<?php

use App\Http\Controllers\admin\AddAdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\user\PaymentController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\admin\AdminDashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// For Frontend Users
Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user-dashboard', [UserDashboardController::class, 'index'])->name('user-dashboard');
    Route::get('/products/search', [UserDashboardController::class, 'search'])->name('product.search');
    Route::get('checkout', [CheckoutController::class, 'showCheckoutForm'])->name('checkout');
    Route::post('checkout', [CheckoutController::class, 'checkout']);
    Route::post('process-payment', [CheckoutController::class, 'processPayment'])->name('payment.process');
    Route::get('payment-success', [CheckoutController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('/index/cart/{id}', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart/view', [CartController::class, 'viewIndex'])->name('cart.viewIndex');
    Route::delete('/cart/{id}', [CartController::class, 'deleteFromCart'])->name('cart.delete');
});

// For Admin Dashboard
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->name('admin-dashboard');
    //Sub Admin
    Route::get('/admin/index', [AddAdminController::class,'index'])->name('admin.index');
    Route::get('/add/admin',[AddAdminController::class,'create'])->name('admin.add');
    Route::post('/store/admin',[AddAdminController::class,'store'])->name('admin.store');
    //Product
    Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
    Route::get('/add/product', [ProductController::class, 'create'])->name('product.add');
    Route::post('/store/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/product/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/update/product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/delete/product/{id}', [ProductController::class, 'destroy'])->name('product.delete');


    // Category
    Route::get('/category/index', [CategoriesController::class, 'index'])->name('category.index');
    Route::get('/add/category', [CategoriesController::class, 'create'])->name('category.add');
    Route::post('/store/category', [CategoriesController::class, 'store'])->name('category.store');
    Route::get('/edit/category/{id}', [CategoriesController::class, 'edit'])->name('category.edit');
    Route::put('/update/category/{id}', [CategoriesController::class, 'update'])->name('category.update');
    Route::delete('/delete/category/{id}', [CategoriesController::class, 'destroy'])->name('category.delete');
    Route::get("/view/category", [CategoriesController::class, 'view'])->name('category.view');
});
