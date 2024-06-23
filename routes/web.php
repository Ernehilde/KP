<?php

use App\Http\Controllers\Admin\AdminDataController;
use App\Http\Controllers\Admin\AdminRegisController;
use App\Http\Controllers\Admin\AdminRegisViewController;
use App\Http\Controllers\Admin\AdminDataViewController;
use App\Http\Controllers\Admin\HargaController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DataViewController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
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

Route::middleware(['auth', 'userMiddleware'])->group(function () {
    Route::get('/dashboard', [AdminDataController::class,'showDashboard'])->name('dashboard');
});

Route::resource('/items', DataController::class);
Route::get('/create', [DataViewController::class, 'index'])->name('items.create-items');
Route::get('/dashboard', [AdminDataController::class,'showDashboard']);
Route::get('/print-items', [PDFController::class, 'showPrintForm'])->name('items.items.printForm');
Route::post('/print-items', [AdminDataController::class, 'printPDF'])->name('items.items.print');



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

    Route::get('/dashboard', [AdminDataController::class,'showDashboard'])->name('dashboard');
    Route::get('/users', [AdminRegisController::class, 'index'])->name('admin.user');
    Route::get('/regis', [AdminRegisViewController::class, 'index'])->name('admin.regis');
    Route::get('/register', [AdminRegisController::class, 'create'])->name('admin.regis.create');
    Route::post('/register', [AdminRegisController::class, 'store']);
    Route::get('/users/{id}', [AdminRegisController::class, 'edit'])->name('admin.users.edit');
    Route::put('/users/{id}', [AdminRegisController::class, 'update'])->name('admin.users.update');
    Route::delete('admin/users/{id}', [AdminRegisController::class, 'destroy'])->name('admin.user.delete');
    Route::get('/print-items', [PDFController::class, 'showPrintForm'])->name('items.items.printForm');
    Route::post('/print-items', [AdminDataController::class, 'printPDF'])->name('items.items.print');

    Route::get('harga', [HargaController::class, 'index'])->name('admin.harga.index');
    Route::get('harga/create', [HargaController::class, 'create'])->name('admin.harga.create');
    Route::post('harga', [HargaController::class, 'store'])->name('admin.harga.store');
    Route::get('harga/{price}/edit', [HargaController::class, 'edit'])->name('admin.harga.edit');
    Route::put('harga/{price}', [HargaController::class, 'update'])->name('admin.harga.update');
    Route::delete('harga/{price}', [HargaController::class, 'destroy'])->name('admin.harga.destroy');
});
