<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registration\RegisterController;

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
});

route::get('/login',[LoginController::class, 'login'])->name('login');
route::get('/register',[RegisterController::class, 'register'])->name('register');
Route::get('create_role_index', function () {
    return view('create_role_index');
});

route::post('create_role',[RegisterController::class, 'create_role'])->name('create_role');
route::get('/get_role_list/{param_type}/{id}/{status}',[RegisterController::class, 'get_role_list'])->name('get_role_list');

route::get('/edit_role/{id}',[RegisterController::class, 'edit_role'])->name('edit_role');
Route::post('/update_role',[RegisterController::class, 'update_role'])->name('update_role');
route::get('/delete_role/{id}',[RegisterController::class, 'delete_role'])->name('delete_role');

route::post('/register_new_user',[RegisterController::class, 'register_new_user'])->name('register_new_user');