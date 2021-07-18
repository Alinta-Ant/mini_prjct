<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Helpcontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\MainController;
use App\Http\Controllers\productController;
use App\Http\Controllers\Adminhomecontroller;





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
Route::get('/', [Homecontroller::class,'index']);

Route::get('/home', [Homecontroller::class,'create']);
Route::get('/help', [Helpcontroller::class,'create']);
Route::get('/history', [productController::class,'historycreate']);
Route::get('/science', [productController::class,'sciencecreate']);
Route::get('/literature', [productController::class,'literaturecreate']);
Route::get('/journal', [productController::class,'journalcreate']);


route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
route::post('/auth/check',[MainController::class,'check'])->name('auth.check');
route::get('/logout',[MainController::class,'logout']);


route::group(['middleware'=>['AuthCheck']],function(){
    route::get('/admin/dashboard',[MainController::class,'dashboard']);
    route::get('/admin/adminhome',[MainController::class,'adminhome']);
    route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
    route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
});



Route::get('/addcategory',[productController::class , 'index' ] );
Route::post('/categoryread',[productController::class , 'store' ] );
Route::get('/addcategory',[productController::class , 'catview' ] );
Route::get('/addproduct',[productController::class , 'create' ] );
Route::post('/pstore',[productController::class , 'productview' ] );
Route::get('/productview',[productController::class , 'prodview' ] );
Route::get('/tdelete',[productController::class , 'proddelete' ] );
route::post('/proddeleteprocess/{id}',[productController::class,'destroy']);
Route::get('userdelete/{id}',[productController::class,'delete']);
Route::get('edit/{id}',[productController::class,'edit']);
route::post('edit/update',[productController::class,'update']);
Route::get('/cartview',[productController::class , 'cartview' ] );
Route::post('/addtocart',[productController::class,'addtocart']);
Route::get('cartdelete/{id}',[productController::class,'cartdelete']);



Route::get('/addtoorder',[productController::class,'addtoorder']);