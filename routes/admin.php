<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Route;
use Auth;

Route::get('/', [AdminController::class, 'index'])->name('index');

Route::get('/newsletter', [Admin\NewsletterController::class, 'getNewsletters'])->name('newsletters');
Route::get('/contacts', [Admin\ContactController::class, 'contacts'])->name('contacts');

Route::get('/team-members', [Admin\TeamController::class, 'teamMembers'])->name('team_members');

Route::post('/add-team-member', [Admin\TeamController::class, 'addTeamMember'])->name('add_team_member');
Route::post('/delete-team-member', [Admin\TeamController::class, 'deleteTeamMember'])->name('delete_team_member');

Route::match(['GET', 'POST'], 'general-settings', [Admin\GeneralSettingController::class, 'generalSetting'])->name('general_setting');
Route::match(['GET'], 'manage-clients-company', [Admin\ClientsListController::class, 'getClientsList'])->name('clients_list_company');
Route::post('add-client-company', [Admin\ClientsListController::class, 'addClientCompany'])->name('add_client_company');


Route::get('testimonials', [Admin\TestimonialController::class, 'getAllTestimonials'])->name('testimonials');
Route::group(['prefix'=>'testimonial', 'as'=>'testimonial.'], function(){
  Route::post('testimonial/save', [Admin\TestimonialController::class, 'saveTestimonial'])->name('save');
  Route::post('testimonial/delete', [Admin\TestimonialController::class, 'deleteTestimonial'])->name('delete');
});

Route::group(['prefix'=> 'services','as'=> 'service.'], function(){
  Route::get('/', [Admin\ServiceController::class, 'getServiceList'])->name('list');
  Route::match(['GET', 'POST'], '/save', [Admin\ServiceController::class, 'saveService'])->name('save');
  Route::post('/service/delete', [Admin\ServiceController::class, 'deleteService'])->name('delete');
});



// START:: Blog
Route::group(['prefix'=>'blog', 'as'=>'blog.'], function () {
  Route::get('/', [Admin\BlogController::class, 'index'])->name('index');
  Route::get('/detail', [Admin\BlogController::class, 'create'])->name('detail');
  Route::post('/store', [Admin\BlogController::class, 'store'])->name('store');
  Route::post('/delete', [Admin\BlogController::class, 'delete'])->name('delete');
});
// END:: Blog

// STAR:: Services
Route::group(['prefix'=> 'service','as'=> 'service.'], function () {
  // Route::get('/', [Admin\::class,
});
// END:: Services


Route::group(['prefix'=>'auth', 'as'=>'auth.'], function () {

  Route::get('/groups', [PermissionController::class, 'authGroups'])
    ->name('auth_groups');

  Route::post('create-group', [PermissionController::class, 'createAuthGroup'])
    ->name('create_group');

  Route::get('users', [UserController::class, 'getUsers'])
    ->name('users');
});


Route::group(['prefix'=>'sliders', 'as'=>'sliders.', 'namespace'=>'Admin'], function () {
  
  Route::get('/', [SliderController::class, 'getSlidersList'])
    ->name('list');

  Route::post('/add', [SliderController::class, 'addSlider'])
    ->name('add');

  Route::match(['GET', 'POST'], 'edit/{id}', [SliderController::class, 'editSlider'])
    ->name('edit');

  Route::match(['POST', 'delete'], 'delete/{slider}', [SliderController::class, 'deleteSlider'])
    ->name('delete');

  
});