<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\CKEditor\CKEditorController;
use App\Http\Controllers\Delivery\DeliveryController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\SubCategories\SubCategoriesController;
use App\Http\Controllers\User\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';


// Admin Routes
Route::get('logout',[AdminController::class,'logout'])->name('logout');
Route::get('admin-profile',[AdminController::class,'adminProfile'])->name('admin-profile');
Route::post('new-password',[AdminController::class,'newPassword']);


//Categories Routes
Route::middleware(['auth'])->group(function() {
    Route::get('/add-category', [CategoriesController::class, 'index'])->name('add-category');
    Route::post('/save-category', [CategoriesController::class, 'saveCategory'])->name('save-category');
    Route::get('/all-category', [CategoriesController::class, 'allCategory'])->name('all-category');
    Route::get('/edit-category/{id}', [CategoriesController::class, 'editCategory'])->name('edit-category');
    Route::post('/update-category/{id}', [CategoriesController::class, 'updateCategory'])->name('update-category');
    Route::get('delete-category/{id}', [CategoriesController::class, 'deleteCategory'])->name('delete-category');
});

//SubCategories Routes
Route::middleware(['auth'])->group(function() {
    Route::get('/add-subCategory', [SubCategoriesController::class, 'index'])->name('add-subCategory');
    Route::post('/save-subCategory', [SubCategoriesController::class, 'saveSubCategory'])->name('save-subCategory');
    Route::get('/all-subCategory', [SubCategoriesController::class, 'allSubCategory'])->name('all-subCategory');
    Route::get('/edit-subCategory/{id}', [SubCategoriesController::class, 'editSubCategory'])->name('edit-subCategory');
    Route::post('/update-subCategory/{id}', [SubCategoriesController::class, 'updateSubCategory'])->name('update-subCategory');
    Route::get('delete-subCategory/{id}', [SubCategoriesController::class, 'deleteSubCategory'])->name('delete-subCategory');
});

//Product Routes
Route::get('/add-product', [ProductController::class, 'index'])->name('add-product');
Route::post('/save-product', [ProductController::class, 'saveProduct'])->name('save-product');
Route::get('/all-product', [ProductController::class, 'allProduct'])->name('all-product');
//Route::get('/unactive-product/{id}', [ProductController::class, 'unactiveProduct'])->name('unactive-product');
//Route::get('/active-product/{id}', [ProductController::class, 'activeProduct'])->name('active-product');
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
//Route::post('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');

//Orders Route
Route::get('/all-order',[OrderController::class,'index'])->name('all-order');
Route::get('/delete-order/{id}',[OrderController::class,'delete'])->name('delete-order');
Route::get('order-show/{id}',[OrderController::class,'show'])->name('order-show');

//Users Routes
Route::get('all-user',[UserController::class,'index'])->name('all-user');
Route::get('edit-user/{id}',[UserController::class,'edit'])->name('edit-user');
Route::get('delete-user/{id}',[UserController::class,'delete'])->name('delete-user');


//Delivery Routes
Route::get('add-delivery',[DeliveryController::class,'index'])->name('add-delivery');
Route::post('save-delivery',[DeliveryController::class,'save'])->name('save-delivery');
Route::get('all-delivery',[DeliveryController::class,'allDelivery'])->name('all-delivery');
Route::get('edit-delivery/{id}',[DeliveryController::class,'edit'])->name('edit-delivery');
Route::get('delete-delivery/{id}',[DeliveryController::class,'delete'])->name('delete-delivery');







Route::post('ckeditor/image_upload', [CKEditorController::class, 'upload'])->name('upload');
