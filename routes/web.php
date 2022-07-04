<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function() {
    Route::get('sign-in', 'SignInController@showSignInPage')
        ->name('show.sign-in.page');
    Route::post('signing-in', 'SignInController@signingIn')
        ->name('admin.signing-in');

});
Route::prefix('panel/admin')->middleware('auth:admin')->group(function (){
    Route::get('profile', 'AdminController@showProfilePage')->name('show.profile.page');
    Route::get('admins', 'AdminController@showAdminsPage')->name('show.admins.page');
    Route::get('edit-admin/{id}', 'AdminController@showEditForm')->name('show.edit.form.admin');
    Route::post('update-edited-admin/{id}', 'AdminController@updateEditedAdmin')->name('update.edited.admin');
    Route::get('create-new-admin', 'AdminController@showCreateFrom')->name('create.new.admin');
    Route::post('store-new-admin', 'AdminController@store')->name('store.new.admin');
    Route::get('admin-destroy/{id}', 'AdminController@destroy')->name('destroy.admin');
    Route::post('logout', 'AdminController@Logout')->name('logout');

});

Route::prefix('panel/admin')->middleware('auth:admin')->group(function (){
    Route::get('users', 'UserController@showUsersPage')->name('show.users.page');
    Route::get('edit-user/{id}', 'UserController@showEditForm')->name('show.edit.form.user');
    Route::post('update-edited-user/{id}', 'UserController@updateEditedUser')->name('update.edited.user');
    Route::get('create-new-user', 'UserController@showCreateFrom')->name('create.new.user');
    Route::post('store-new-user', 'UserController@store')->name('store.new.user');
    Route::get('user-destroy/{id}', 'UserController@destroy')->name('destroy.user');

});

Route::prefix('panel/admin/lottery')->middleware('auth:admin')->group(function (){
Route::get('/', 'LotteryController@showLotteryPage')->name('show.lottery.page');
Route::get('lottery-win', 'LotteryController@getLotteryWin')->name('show.lottery.win');
Route::get('add-users-form', 'LotteryController@ShowAddUsersForm')->name('show.add.users.form');
Route::post('add-users', 'LotteryController@addUsers')->name('add.users');
});
