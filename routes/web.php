<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\borrowController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\FassController;
use App\Http\Controllers\peminjamController;
use App\Http\Controllers\RegisController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['guest'])->group(function(){
    Route::get('/',[FassController::class,'index']);
    Route::post('/',[FassController::class,'login']);

});
Route::get('/home',function(){

    return redirect('admin');
});



Route::middleware(['auth'])->group(function(){
    
    Route::get('/admin',[AdministratorController::class,'index']);
    Route::get('/admin/administrator',[AdministratorController::class,'administrator'])->middleware('usern:administrator');
    Route::get('/admin/petugas',[AdministratorController::class,'petugas'])->middleware('usern:petugas');
    Route::get('/admin/peminjam',[AdministratorController::class,'peminjam'])->middleware('usern:peminjam');
     
      
      Route::get('/logout',[FassController::class,'logout']);
    });    

    Route::get('/register',[RegisController::class,'Register'])->name('register');
    Route::post('/register',[RegisController::class,'Registpost']);

    Route::resource('/buku',BukuController::class);

    Route::get('/peminjam',[borrowController::class,'pinjam']);
    
    Route::get('/laporanbuku',[borrowController::class,'laporan']);
    Route::get('/pinjam',[peminjamController::class,'peminjam']);

    

    