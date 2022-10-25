<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;

use App\Http\Controllers\Admincontroller;

use App\Http\Controllers\Website;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[Homecontroller::class,'redirect']);
Route::get('/',[Homecontroller::class,'index']);
Route::get('/product',[Admincontroller::class,'product']);
Route::post('/uploadproduct',[Admincontroller::class,'uploadproduct']);
Route::get('/showproduct',[Admincontroller::class,'showproduct']);
Route::get('/deleteproduct/{id}',[Admincontroller::class,'deleteproduct']);
Route::get('/updateview/{id}',[Admincontroller::class,'updateview']);
Route::post('/updateproduct/{id}',[Admincontroller::class,'updateproduct']);
Route::get('/search',[Homecontroller::class,'search']);
Route::post('/addcart/{id}',[Homecontroller::class,'addcart']);
Route::get('/showcart',[Homecontroller::class,'showcart']);
Route::get('/delete/{id}',[Homecontroller::class,'deletecart']);
Route::post('/order',[Homecontroller::class,'confirmorder'])->name('order');
Route::get('/showorder',[Admincontroller::class,'showorder']);
Route::get('/updatestatus/{id}',[Admincontroller::class,'updatestatus']);

Route::get('/Website/',[Website::class,'Website']);