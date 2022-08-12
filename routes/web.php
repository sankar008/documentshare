<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoryController;
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
    return view('admin.author');
});

Route::prefix('/author')-> group(function(){
	Route::get('/login', [UserController::class, 'index']);
    Route::post('/add-student', [StudentController::class, 'student_add']);
    Route::get('/', [UserController::class, 'index']);
	Route::post('/login', [UserController::class, 'index']);
    Route::get('/logout', function (Request $request) {
        if(Session::get('role_id') == 1){
            Session::flush();
            return redirect('/author/login');
        }else{
            Session::flush();
            return redirect('/author/login');
        }
    });
    Route::get('/dashboard', [UserController::class, 'dashboard']) -> middleware('isLogin');
    Route::get('/users', [UserController::class, 'userList']) -> middleware('isLogin');
    Route::get('/user/add', [UserController::class, 'useradd']) -> middleware('isLogin');
    Route::post('/user/add', [UserController::class, 'useradd']) -> middleware('isLogin');
    Route::get('/user/update', [UserController::class, 'userupdate']) -> middleware('isLogin');
    Route::post('/user/update', [UserController::class, 'userupdate']) -> middleware('isLogin');
    Route::get('/user/delete', [UserController::class, 'userdelete']) -> middleware('isLogin');

    Route::get('/history', [HistoryController::class, 'historyList'])-> middleware('isLogin');
    Route::get('/history/add', [HistoryController::class, 'historyadd'])-> middleware('isLogin');
    Route::post('/history/add', [HistoryController::class, 'historyadd'])-> middleware('isLogin');
    Route::get('/history/update', [HistoryController::class, 'historyupdate'])-> middleware('isLogin');
    Route::post('/history/update', [HistoryController::class, 'historyupdate'])-> middleware('isLogin');
    Route::get('/history/delete', [HistoryController::class, 'historydelete'])-> middleware('isLogin');
    
});