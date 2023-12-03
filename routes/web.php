<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;

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
    return redirect()->route('login.get');
});

/*
|--------------------------------------------------------------------------
| 登入介面
|--------------------------------------------------------------------------
| Login Route
|
*/
Route::get('login', [LoginController::class,'getLogin'])
    ->name('login.get');
Route::post('login', [LoginController::class,'postLogin'])
    ->name('login.post');
Route::get('logout', [LoginController::class,'logout'])
    ->name('logout');
Route::post('use_card_login', [LoginController::class,'useCardLogin'])
    ->name('use_card_login');


/*
|--------------------------------------------------------------------------
| 後台管理系統
|--------------------------------------------------------------------------
| /manage
|
*/
Route::prefix('manage')->name('manage.')->group(function () {
    
    Route::get('/', function () {
        return view('manage.index');
    })->name('index');

});