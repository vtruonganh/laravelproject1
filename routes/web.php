<?php
use App\Http\Controllers\userController;
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



Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
//vta 2002
Route::get('/users',[UserController::class,'index']) -> name('users.index');
Route::get('/users/detail/{id}',[UserController::class,'detail']) -> name('users.detail');
// php artisan serve