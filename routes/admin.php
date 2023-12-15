<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Auth;

Route::get('/', [AdminController::class, 'index'])->name('index');

Route::get('/contacts', [Admin\ContactController::class, 'contacts'])->name('contacts');
Route::get('/team-members', [Admin\TeamController::class, 'teamMembers'])->name('team_members');

Route::post('/add-team-member', [Admin\TeamController::class, 'addTeamMember'])->name('add_team_member');
Route::match(['GET', 'POST'], 'general-settings', [Admin\GeneralSettingController::class, 'generalSetting'])->name('general_setting');
Route::match(['GET', 'POST'], 'manage-clients-company', [Admin\ClientsListController::class, 'getClientsList'])->name('clients_list_company');


Route::group(['prefix'=>'auth', 'as'=>'auth.'], function () {

  Route::get('/groups', [PermissionController::class, 'authGroups'])
    ->name('auth_groups');

  Route::post('create-group', [PermissionController::class, 'createAuthGroup'])
    ->name('create_group');

  Route::get('users', [UserController::class, 'getUsers'])
    ->name('users');

  
});