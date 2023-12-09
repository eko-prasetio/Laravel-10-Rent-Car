<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//Admin Group Miidleware
Route::middleware(['auth','roles:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/brand',[AdminController::class, 'BrandDashboard'])->name('admin.brand');
    Route::get('/add/brand',[AdminController::class, 'AddBrand'])->name('add.brand');
    Route::post('/store/brand',[AdminController::class, 'StoreBrand'])->name('brand.store');
    Route::get('/edit/brand/{id}',[AdminController::class, 'EditBrand'])->name('brand.edit');
    Route::post('/update/brand',[AdminController::class, 'UpdateBrand'])->name('brand.update');
    Route::get('/delete/brand/{id}',[AdminController::class, 'DeleteBrand'])->name('brand.delete');


    Route::get('/admin/type',[AdminController::class, 'AddType'])->name('admin.type');
    Route::get('/add/type',[AdminController::class, 'AddTypeData'])->name('add.type');
    Route::post('/store/type',[AdminController::class, 'StoreType'])->name('type.store');
});