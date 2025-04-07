<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::prefix('admin')->group(function () {
    Route::get('users', [AuthController::class, 'getUsers'])->name('admin.users');
    Route::get('blogs', [AuthController::class, 'getBlogs'])->name('admin.blogs');
    Route::get('register', [AuthController::class, 'showRegister'])->name('admin.showRegister');
    Route::post('register', [AuthController::class, 'register'])->name('admin.register');  
    Route::get('pages', [PageController::class, 'getPages'])->name('admin.pages');  
    Route::get('pages/create', [PageController::class, 'createPage'])->name('admin.pages.create');
    Route::post('pages/create', [PageController::class, 'createPageSave'])->name('admin.pages.create');
    Route::get('pages/{id}/edit', [PageController::class, 'editPage'])->name('admin.pages.edit');
    Route::put('pages/{id}/update', [PageController::class, 'updatePage'])->name('admin.pages.update');
    Route::get('pages/{id}/view', [PageController::class, 'viewPage'])->name('admin.pages.view');
    Route::delete('pages/{id}/delete', [PageController::class, 'deletePage'])->name('admin.pages.delete');

    Route::get('metatag', [PageController::class, 'getMetatag'])->name('admin.metatag');
    // blog url
    Route::get('blogs', [PageController::class, 'getBlogs'])->name('admin.blogs'); 
    Route::get('blogs/create', [PageController::class, 'createBlog'])->name('admin.blog.create');
    
});

