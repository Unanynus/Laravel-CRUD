
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UploadController;




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
Route::get('/info',[DeviceController::class,'insertform']);
Route::post('/info',[DeviceController::class,'requestdata']); 
Route::get("users",[UserController::class,'getData']);
Route::post("userLogin",[UserAuthController::class,'userLogin']);

Route::get("upload",function(){
    return view('upload');
});

Route::post("upload",[UploadController::class,'index'])->name('upload');
Route::get("upload-file",[FileUploadController::class,'createForm']);
Route::post("upload-file",[FileUploadController::class,'fileUpload'])->name('fileUpload');

Route::get("showdocs",FileUploadController::class,'__invoke')->name('showdocs');


Route::get("excel",function(){
    return view('excel');
});

Route::get('export-user', [UserController::class, 'fileExport'])->name('export-user');

Route::post('import-user', [UserController::class, 'importFile'])->name('import-user');

Route::get("show-excel",[UserController::class, 'showData'])->name('show-excel');