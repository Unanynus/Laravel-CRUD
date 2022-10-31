<?php

use App\Http\Controllers\BranchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Models\Customer;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data',[DummyController::class,'getData']);
Route::get('lists/{id?}',[DeviceController::class,'lists']);
Route::get('dept/{id?}',[BranchController::class,'dept']);
Route::get('customer/{id?}',[CustomerController::class,'getData']);
Route::get('product/{id?}',[ProductController::class,'fetchData']);
Route::get('show',[CustomerController::class,'joinTable']);
Route::get('prodData/{branch_id}',[ProductController::class,'getAllData']);

Route::get('info',[ProductController::class,'index']);
Route::get('custData/{id?}',[CustomerController::class,'getCust']);
Route::get('leftjoin',[CustomerController::class,'leftJoin']);
Route::post('adddata',[CustomerController::class,'add']);

Route::post('added',[ProductController::class,'add']);

Route::get('onetoone/{id}',[CustomerController::class,'oneToOne']);



Route::get('dataEntry',[CustomerController::class,'addData']);
Route::post('dataEntry',[CustomerController::class,'postData'])->name('post.data');
Route::get('dataEntered',[CustomerController::class,'dataInserted'])->name('data.enter');
Route::get('editForm/{id}',[CustomerController::class,'edit'])->name('edit');
Route::get('fetchDetails',[CustomerController::class,'fetchAll'])->name('fetch.table');
Route::post('editForm/{id}',[CustomerController::class,'update'])->name('update');
Route::get('dataList',function(){
    return view('customerList');
})->name('fetch.data');

Route::get('client',[CustomerController::class,'httpclient']);