<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Models\{
    Role,
    Permission,
    User,
};

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
    $admin = User::where('name', 'Admin')->with('roles')->first();
    // $admin_role = Role::where('name', 'admin')->first();
    // $admin->roles()->attach($admin_role);

    // dd($admin_role->toArray());
    dd($admin->toArray());
    // return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/todos', [TodoController::class, 'index'])->name('todos');
Route::get('/todo/add', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/add', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit');
Route::post('/todo/edit/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::get('/todo/delete/{id}', [TodoController::class, 'destroy'])->name('todo.delete');