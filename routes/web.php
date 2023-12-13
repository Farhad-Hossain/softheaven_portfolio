<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Auth;

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

// Execute Artisan command
Route::get('/exe-1995-05-egaro', [HomeController::class, 'executeCommand']);

Route::get('/', [FrontendController::class, 'welcome']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('contact', [FrontendController::class, 'saveContact'])->name('save_contact');


// Admin routes
Route::prefix('admin')->as('admin.')->group(base_path('routes/admin.php'));

