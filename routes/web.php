<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\CmanagerController;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//group middleware: to protect these urls

//auth to check the user is logged in; role to check if the user is accessing things based on their role

Route::middleware(['auth','role:admin'])->group(function()
{ 
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
});

Route::middleware(['auth','role:editor'])->group(function()
{ 
    Route::get('/editor/dashboard', [EditorController::class, 'EditorDashboard'])->name('editor.dashboard');
});

Route::middleware(['auth','role:cmanager'])->group(function()
{ 
    Route::get('/cmanager/dashboard', [CmanagerController::class, 'CmanagerDashboard'])->name('cmanager.dashboard');
});

Route::middleware(['auth','role:user'])->group(function()
{ 
    Route::get('/user/dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard');
});
