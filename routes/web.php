<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/', [ProductController::class, 'welcome'])
 ->name('home');

Route::get('/product/{product}', 
 [ProductController::class, 'show'])->name('product.show');

 Route::get('/addToCart/{product}',
 [ProductController::class, 'addToCart'])->name('cart.add');
 
 Route::get('/cart',
 [CartController::class, 'show'])->name('cart.show');

 Route::get('/cart/{operation}/{product}',
 [CartController::class, 'operate'])->name('cart.operate');

 Route::get('/user',[UserController::class, 'edit'])->name('user.edit');

Route::patch('/user',[UserController::class, 'update'])->name('user.update');

Route::get('/userlogout',[UserController::class, 'logout'])->name('user.logout');

Route::get('/product/edit/{product}',[ProductController::class, 'edit'])->name('product.edit')->middleware('role.editor');
Route::patch('/product/{product}',[ProductController::class, 'update'])->name('product.update');

 /*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});