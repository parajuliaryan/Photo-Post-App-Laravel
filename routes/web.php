<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
    return view('/auth/register');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [PostsController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/addpost', [PostsController::class, 'create'])->name('addpost');
    Route::post('/dashboard', [PostsController::class, 'store'])->name('storepost');
});

