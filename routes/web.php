<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;

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
//redirect


//Authentic Home page
Route::get('/redirect',[HomeController::class,'redirect']);



// User view pages
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/services',[HomeController::class,'services'])->name('services');
Route::get('/about',[HomeController::class,'about'])->name('about');

//User Manageing
Route::get('/about-user',[HomeController::class,'about_user']);
Route::get('/edit/{id}',[HomeController::class,'edit_user']);
Route::post('/save_user_info/{id}',[HomeController::class,'save_user_info']);

Route::get('/qualifications',[HomeController::class,'quality_about']);
Route::get('/edit_user_quality/{id}',[HomeController::class,'edit_user_quality']);
Route::post('/user_quality_update/{id}',[HomeController::class,'user_quality_update']);

//upload img

Route::post('/upload_img/{id}',[HomeController::class,'upload_img']);


//Category Manageing

Route::get('/category/{id}',[HomeController::class,'showCategory']);
Route::get('/about-user/{id}',[HomeController::class,'about_provider']);
Route::get('/qualifications/{id}',[HomeController::class,'qualifications']);




//admin login (Admin Controller)

Route::get('/admin_login',[Admin::class,'adminlogin']);
Route::post('/login-admin',[Admin::class,'loginAdminForm']); //form url

Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin_dashboard',[Admin::class,'dashboard']);
    Route::get('/show-user',[Admin::class,'show_users']);
    
    Route::get('/add_category',[Admin::class,'add_category']);
    Route::post('/save_category',[Admin::class,'save_category']);
    Route::get('/list_category',[Admin::class,'list_category']);
    Route::get('/edit_category/{id}',[Admin::class,'edit_category']);
    Route::post('/save_edit_categoty/{id}',[Admin::class,'save_edit_categoty']);
    Route::get('/delete_category/{id}',[Admin::class,'delete_category']);

    Route::get('/approve_user/{id}',[Admin::class,'approve_user']);
    Route::get('/admin_logout',[Admin::class,'admin_logout'])->name('admin-logout');
});


// jetstream log in
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
