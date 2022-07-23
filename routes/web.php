<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardIndexController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PesananController;

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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active'=>'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Muhamad Ridwan',
        'email' => 'ridwan@gmail.co.id',
        'image' => 'image1.jpg',
        'title' => 'About',
        'active'=>'about'
    ]);
});





// Route::get('/categories/{category:slug}', function(Category $category)  {
//     return view('posts', [
//         'title' =>"Post By Category : $category->name",
//         'active'=>'categories',
//         'posts'=>$category->posts->load('author', 'category')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' =>"Post By Author : $author->name",
//         'active'=> 'posts',
//         'posts'=>$author->posts->load('author', 'category')
//     ]);
// });


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');
Route::get('/dashboard', [DashboardIndexController::class, 'index'])->name('dashboard')->middleware('auth');


Route::resource('/dashboard/pesanan', PesananController::class);

Route::resource('/dashboard/profile', ProfileController::class);
Route::resource('/dashboard/users', AdminUserController::class);
Route::resource('/dashboard/layanan', LayananController::class)->middleware('admin');

Route::get('/dashboard/laporan', [LaporanController::class, 'index']);
Route::resource('/dashboard/log', LogController::class);
Route::get('/dashboard/cari-laporan', [LaporanController::class, 'cari']);
