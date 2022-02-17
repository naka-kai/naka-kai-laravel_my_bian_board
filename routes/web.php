<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MailSendController;

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
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__ . '/auth.php';

Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::prefix('post')->group(function () {

    Route::get('/create', [PostController::class, 'create'])->name('post.create');

    Route::post('/create_confirm', [PostController::class, 'createConfirm'])->name('post.createConfirm');

    Route::post('/store', [PostController::class, 'store'])->name('post.store');

    Route::get('/{id}', [PostController::class, 'show'])->name('post.show_message');

    Route::get('edit_pass_confirm/{id}', [PostController::class, 'editPassConfirm']);
    Route::post('edit_pass_confirm/{id}', [PostController::class, 'editPassConfirm'])->name('post.editPassConfirm');

    Route::get('edit/{id}', [PostController::class, 'edit']);
    Route::post('edit/{id}', [PostController::class, 'edit'])->name('post.edit');

    Route::get('edit_confirm/{id}', [PostController::class, 'editConfirm']);
    Route::post('edit_confirm/{id}', [PostController::class, 'editConfirm'])->name('post.edit_confirm');

    Route::post('update/{id}', [PostController::class, 'update'])->name('post.update');
});

Route::post('/mail/{id}', [MailSendController::class, 'store'])->name('mail.store');

Route::get('/search', [PostController::class, 'index'])->name('search');
