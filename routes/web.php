<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeacherController;

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

Route::get('/hello', [WelcomeController::class, 'hello']) ->name('welcome');

Route::get('/add-teacher',[TeacherController::class, 'addTeacher'])->name('insert-teacher-data');
//PRAKTIKUM 1
//nomor1
Route::get('/', function () {
    echo "Hi, Welcome to Laravel";
});
//nomor2
Route::get('/about', function () {
    echo "1941720221 <br>";
    echo "Milyun Ni'ma Shoumi <br>";
    echo "TI-2A";
}) -> name('about');
//nomor3
Route::get('/articles/{id}', function ($id) {
    echo "IThis is Article Pages with ID: ".$id;
});

//PRAKTIKUM 2
//Route::get('/', [PageController::class,'index']);