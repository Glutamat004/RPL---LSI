<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BotmanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\ReservationController;
use App\Models\Category;

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
//NEW
Route::get('/', function () {
    return view('home2', [
    ]);
});
Route::get('/login', function () {
    return view('login', [
    ]);
});
Route::get('/signup', function () {
    return view('signup', [
    ]);
});
// Route::get('/reservation', function () {
//     return view('reservation', [
//     ]);
// })->middleware('auth');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::resource('/reservation',ReservationController::class)->middleware('auth');
Route::get('/reservation/getseats/{id}',[ReservationController::class,'getseats'])->middleware('auth');
Route::get('/reservation/checkSlug',[ReservationController::class,'checkSlug'])->middleware('auth');
// Route::get('/transaksi', function () {
//     return view('transaksi', [
//     ]);
// });



Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth');
Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug'])
->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::get('/dashboard/transaksi', [DashboardPostController::class, 'table'])->middleware('auth');
Route::resource('/dashboard/jadifreelancer', AccountController::class)->middleware('auth');
//Route::get('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'show'])->middleware('auth');
//Route::get('/dashboard/post/create', [DashboardPostController::class, 'create'])->middleware('auth');


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/posts/{post:slug}/order', [PostController::class, 'order']);
Route::post('/posts/{post:slug}/order', [PostController::class, 'orderList']);
// Route::resource('dash/transaksi', TransactionController::class)->middleware('auth');
//Route::post('/transaksi/store', [TransactionController::class, 'store'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::match(['get', 'post'], '/botman', [BotmanController::class, 'handle']);
Route::get('/botman/tinker',  [BotmanController::class, 'tinker']);
