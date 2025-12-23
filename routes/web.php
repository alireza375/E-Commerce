<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Common\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController as UserDashboard;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'HomeMain'])->name('home.main');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::post('/admin/logout', [AdminDashboard::class, 'AdminDestroy'])
    ->name('admin.logout');

    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])
            ->name('admin.admin_dashboard');
        Route::get('/admin/profile', [AdminDashboard::class, 'AdminProfile'])->name('admin.profile');
    });

     Route::controller(UserDashboard::class)->group(function(){
        Route::get('/all/user','AllUser')->name('all.user');

  });



      Route::controller(CategoryController::class)->group(function(){
        Route::get('/all/category','AllCategory')->name('all.category');
        Route::get('/add/category','AddCategory')->name('add.category');
        Route::post('/store/category','StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}','EditCategory')->name('edit.category');
        Route::post('/update/category/{id}','UpdateCategory')->name('category.update');
        Route::get('/delete/category/{id}','DeleteCategory')->name('category.delete');
    });


    Route::controller(ProductController::class)->group(function(){
        Route::get('/all/product','AllProduct')->name('all.product');
        Route::get('/add/product','AddProduct')->name('add.product');
        Route::post('/store/product','StoreProduct')->name('store.product');
        Route::get('/edit/product/{id}','EditProduct')->name('edit.product');
        Route::post('/update/product/{id}','UpdateProduct')->name('product.update');
        Route::get('/delete/product/{id}','DeleteProduct')->name('product.delete');
    });

     Route::controller(CartController::class)->group(function(){
        Route::get('/add/cart', [CartController::class, 'CartIndex'])->name('cart.index');
        Route::post('/store/cart/{product_id}', [CartController::class, 'CartStore'])->name('cart.store');
        // Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
        // Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
    });

    // Route::middleware('auth:checkUser')->group(function () {
    //     Route::get('/add/cart', [CartController::class, 'CartIndex'])->name('cart.index');
    //     Route::post('/store/cart/{product_id}', [CartController::class, 'CartStore'])->name('cart.store');
    // });

    Route::get('/user/logout', [UserDashboard::class, 'UserDestroy'])->name('user.logout');
    Route::middleware('role:user')->group(function () {

        Route::get('/user/dashboard', [UserDashboard::class, 'index'])
            ->name('user.user_dashboard');
    });
});
require __DIR__.'/auth.php';


