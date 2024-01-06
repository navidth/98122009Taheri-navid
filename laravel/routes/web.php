<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\LessonController;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
// Crud operation for Prof table
//Show add prof
Route::get('/addprof', function () {
    return view('admin.profs.add');
});
//Show list of profs
Route::get('/proflist',[ProfController::class,'index'])->name('proflist');
//Save prof
Route::post('/addprof',[ProfController::class,'save_prof']); 
//
Route::get('/showprof/{id}',[ProfController::class,'show_prof']);

Route::get('/edit/{id}',[ProfController::class,'edit']);
Route::put('/edit/{id}',[ProfController::class,'save'])->name('saveprof');
Route::delete('/delete/{id}',[ProfController::class,'delete'])->name('deleteprof');
Route::resource('lesson',LessonController::class);

Route::get('/register',[AuthController::class,'register'])->name('registerview');
Route::get('/login',[AuthController::class,'login'])->name('loginview');
Route::post('/register',[AuthController::class, 'save_user'])->name('registeruser');
Route::post('/login',[AuthController::class, 'login_user'])->name('loginuser');
Route::get('/dashboard',function(){
    if(!Auth::check())
    {
        return redirect()->route('loginview');
    }
    return view('admin.index');
})->name('dashboard');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
