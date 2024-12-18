<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

// Route::get('/', function () {
//     return view('home.index');
// });
route::get('/',[HomeController::class,'home']);

route::get('/dashboard',[HomeController::class,'login_home'])
->middleware(['auth', 'verified'])->name('dashboard');;
                                                              #Nabo- direct user to home page when logged in 


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



route::get('admin/dashboard',[HomeController::class,'index']);

route::get('view_category',[AdminController::class,'view_category']);

route::post('add_category',[AdminController::class,'add_category']);

route::get('delete_category/{id}',[AdminController::class,'delete_category']);

route::get('edit_category/{id}',[AdminController::class,'edit_category']);

route::post('update_category/{id}',[AdminController::class,'update_category']);

route::get('add_product',[AdminController::class,'add_product']);

route::post('upload_product',[AdminController::class,'upload_product']);

route::get('view_product',[AdminController::class,'view_product']);

route::get('delete_product/{id}',[AdminController::class,'delete_product']);

route::get('update_product/{id}',[AdminController::class,'update_product']);

route::post('edit_product/{id}',[AdminController::class,'edit_product']);

route::get('product_search',[AdminController::class,'product_search']);

route::get('product_details/{id}',[HomeController::class,'product_details']);


route::get('add_cart/{id}',[HomeController::class,'add_cart']) ->middleware(['auth', 'verified']);

#checks whether the user is logged in if it wants to add something to the cart , if not logged in 
#user will be redirected to the login page 


route::get('mycart',[HomeController::class,'mycart']) ->middleware(['auth', 'verified']);

route::get('delete_cart/{id}',[HomeController::class,'delete_cart']);