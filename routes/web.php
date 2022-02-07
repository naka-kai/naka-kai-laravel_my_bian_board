<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('post')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('post.index');
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::get('/create_confirm', [PostController::class, 'createConfirm'])->name('post.createConfirm');
    Route::post('/store',[PostController::class, 'store'])->name('post.store');
    Route::get('/{id}', [PostController::class, 'show'])->name('post.show_message');
    Route::get('edit_pass_confirm/{id}', [PostController::class, 'editPassConfirm'])->name('post.editPassConfirm');
    Route::post('edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::post('edit_confirm/{id}', [PostController::class, 'edit_confirm'])->name('post.edit_confirm');
});
