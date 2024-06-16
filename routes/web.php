<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminDataController;
use App\Http\Controllers\Admin\AdminItemController;
use App\Http\Controllers\Admin\AdminRegisController;
use App\Http\Controllers\Admin\AdminRegisViewController;
use App\Http\Controllers\Admin\AdminDataViewController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
route::get('admin/dashboard', [HomeController::class, 'index']);

Route::middleware(['auth', 'userMiddleware'])->group(function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
});

Route::resource('/items', DataController::class);

Route::middleware(['auth', 'adminMiddleware'])->prefix('admin')->group(function () {
    Route::resource('/items', AdminDataController::class)->names([
        'index' => 'admin.items.index',
        'create' => 'admin.item.create',
        'store' => 'admin.items.store',
        'show' => 'admin.items.show',
        'edit' => 'admin.items.edit',
        'update' => 'admin.items.update',
        'destroy' => 'admin.items.destroy'
    ]);
    Route::get('/create', [AdminDataViewController::class, 'index'])->name('items.create-items');

    Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/users', [AdminRegisController::class, 'index'])->name('admin.user');
    Route::get('/regis', [AdminRegisViewController::class, 'index'])->name('admin.regis');
    Route::get('/register', [AdminRegisController::class, 'create'])->name('admin.regis.create');
    Route::post('/register', [AdminRegisController::class, 'store']);
    Route::get('/users/{id}', [AdminRegisController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{id}', [AdminRegisController::class, 'update'])->name('admin.users.update');
    Route::delete('admin/users/{id}', [AdminRegisController::class, 'destroy'])->name('admin.user.delete');
});
