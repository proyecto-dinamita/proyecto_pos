<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

require_once __DIR__ . '/auth.php';

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\EmployeeController;

use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\SalaryController;
use App\Http\Controllers\Backend\AttendenceController;
use App\Http\Controllers\Backend\CategoryController;
<<<<<<< HEAD

=======
use App\Http\Controllers\Backend\ProductController;
>>>>>>> 243e588 (products and categories)
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

/** ------------------------ GENERAL ROUTES ------------------------ */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

/** ------------------------ USER ROUTES ------------------------ */

// Logouts routes
Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
Route::get('/logout', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout.page');

Route::middleware('auth')->group(function () {
    // General users routes
    Route::get('/change/password', [AdminController::class, 'ChangePassword'])->name('change.password');
    Route::post('/update/password', [AdminController::class, 'UpdatePassword'])->name('update.password');

    // Admin routes
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/profile', 'AdminProfile')->name('admin.profile');
        Route::post('/admin/profile/store', 'AdminProfileStore')->name('admin.profile.store');
    });

    // Profile routes
    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
    ///Proveedores Rutas 
    Route::controller(SupplierController::class)->group(function () {

        Route::get('/all/supplier', 'AllSupplier')->name('all.supplier');
        Route::get('/add/supplier', 'AddSupplier')->name('add.supplier');
        Route::post('/store/supplier', 'StoreSupplier')->name('supplier.store');
        Route::get('/edit/supplier/{id}', 'EditSupplier')->name('edit.supplier');
        Route::post('/update/supplier', 'UpdateSupplier')->name('supplier.update');
        Route::get('/delete/supplier/{id}', 'DeleteSupplier')->name('delete.supplier');
        Route::get('/details/supplier/{id}','DetailsSupplier')->name('details.supplier');
    });

    ///Categorias Rutas 
    Route::controller(CategoryController::class)->group(function () {

    // Employee routes
    Route::controller(EmployeeController::class)->group(function () {
        Route::get('/all/employee', 'AllEmployee')->name('all.employee');
        Route::get('/add/employee', 'AddEmployee')->name('add.employee');
        Route::post('/store/employee','StoreEmployee')->name('employee.store');
        Route::get('/edit/employee/{id}','EditEmployee')->name('edit.employee');
        Route::post('/update/employee','UpdateEmployee')->name('update.employee');
        Route::get('/delete/employee/{id}','DeleteEmployee')->name('delete.employee');
    });
    
    // Categories routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::post('/store/category', 'StoreCategory')->name('category.store');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('category.update');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    });

    ///Productos Rutas 
    Route::controller(ProductController::class)->group(function () {

        Route::get('/all/product', 'AllProduct')->name('all.product');
        Route::get('/add/product', 'AddProduct')->name('add.product');
        Route::post('/store/product', 'StoreProduct')->name('product.store');
        Route::get('/edit/product/{id}', 'EditProduct')->name('edit.product');
        Route::post('/update/product', 'UdateProduct')->name('product.update');
        Route::get('/delete/product/{id}', 'DeleteProduct')->name('delete.product');
    });
}); // End User Middleware 
