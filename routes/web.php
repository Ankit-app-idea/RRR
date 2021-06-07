<?php

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
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCategoriesController;
use App\Http\Controllers\Admin\AdminSubCategoriesController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;

//Route::view('/', 'welcome');

Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('login', [HomeController::class, 'loginViewPage']);

Auth::routes();
Route::get('logout', [LoginController::class,'logout']);

//admin route

Route::get('/login/admin', [AdminLoginController::class, 'showAdminLoginForm']);
//Route::get('/register/admin', [AdminLoginController::class,'showAdminRegisterForm']);

Route::post('/login/admin', [AdminLoginController::class,'adminLogin']);
Route::post('/register/admin', [AdminLoginController::class,'createAdmin']);

Route::group(['middleware' => 'auth:admin'], function (){    
    Route::get('admin/manage-users',[AdminController::class,'manageUser']);
    Route::get('admin/manage-admin',[AdminController::class,'manageAdmin']);
    Route::get('admin/add-new-admin',[AdminController::class,'addNewAdmin']);
    Route::get('admin/add-new-user',[AdminController::class,'addNewUser']);
    Route::post('admin/create-admin',[AdminController::class,'createAdmin']);
    Route::post('admin/create-user',[AdminController::class,'createUser']);
    
    Route::get('admin/users-edit/{id}',[AdminController::class,'editUser']);
    Route::get('admin/admin-edit/{id}',[AdminController::class,'editAdmin']);
    Route::post('admin/update-user-profile',[AdminController::class,'updateUserProfile']);
    Route::post('admin/update-admin-profile',[AdminController::class,'updateAdminProfile']);

    Route::get('/admin',[AdminController::class,'dashboard']);

	/****categoreis***/
    Route::get('admin/categories',[AdminCategoriesController::class,'categories']);
    Route::get('admin/categories/add',[AdminCategoriesController::class,'add']);
    Route::post('admin/categories/create-new-categories',[AdminCategoriesController::class,'createNewCategories']);
    Route::get('admin/categories/edit/{id}',[AdminCategoriesController::class,'edit']);
    Route::post('admin/categories/update-categories',[AdminCategoriesController::class,'updateCategories']);
    Route::get('admin/categories/delete/{id}',[AdminCategoriesController::class,'deleteCategories']);
    
    
     /****sub categoreis***/
    Route::get('admin/sub-categories',[AdminSubCategoriesController::class,'categories']);
    Route::get('admin/sub-categories/add',[AdminSubCategoriesController::class,'add']);
    Route::post('admin/sub-categories/create-sub-categories',[AdminSubCategoriesController::class,'createSubCategories']);
    Route::get('admin/sub-categories/edit/{id}',[AdminSubCategoriesController::class,'edit']);
    Route::post('admin/sub-categories/update-categories',[AdminSubCategoriesController::class,'updateCategories']);
    Route::get('admin/sub-categories/delete/{id}',[AdminSubCategoriesController::class,'deleteCategories']);	

	
});

Route::get('/admin/logout', [AdminLoginController::class,'adminlogout']);
