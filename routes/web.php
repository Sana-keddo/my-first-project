<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeCategoryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HomeProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomePageController::class,'index'])->name('index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// ----DASHBOARD PAGES-----

// Route::get('/dashboard', function () {
//     return view('Pages.Dashboard.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/dashboard-products', ProductController::class);

Route::get('/insert-product', function () {
    return view('dashboard-insert-product');
})->name('insert-product');

Route::resource('/dashboard-categories', CategoryController::class);


Route::get('/user-dashboard', [UserController::class,'index'])->name('user-dashboard');



// ----HOME PAGES-----

// Route::get('/index', [HomePageController::class,'index'])->name('index');

Route::get('/allproducts', [HomeProductController::class,'index'])->name('allproducts');

Route::get('/allcategories', [HomeCategoryController::class,'index'])->name('allcategories');

Route::get('/contact', function () {
    return view('Pages.Major.contact');
})->name('contact');



