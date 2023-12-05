<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Auth;

Route::get('/', [AdminController::class, 'index'])->name('index');
Route::group(['prefix'=>'auth', 'as'=>'auth.'], function () {
    
    Route::get('/groups', [PermissionController::class, 'authGroups'])
        ->name('auth_groups');

        
});