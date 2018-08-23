<?php

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
    return view('welcome');
});

// admin site routes
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')                         ->name('admin.loginForm');
    Route::post('/login', 'Auth\AdminLoginController@login')                            ->name('admin.login');
    Route::post('/logout', 'Auth\AdminLoginController@logout')                            ->name('admin.logout');

    Route::get('/profile/{profile}/edit', 'AdminController@edit')                                       ->name('adminProfile.edit');
    Route::match(['PUT', 'PATCH'], '/profile/{profile}', 'AdminController@update')                      ->name('adminProfile.update');

    Route::resource('client', 'ClientController', ['except' => ['show']]);
    Route::resource('company', 'CompanyController', ['except' => ['show']]);
});

// client site routes
Route::prefix('client')->group(function() {
    Route::get('/login', 'Auth\ClientLoginController@showLoginForm')                        ->name('client.loginForm');
    Route::post('/login', 'Auth\ClientLoginController@login')                           ->name('client.login');
    Route::post('/logout', 'Auth\ClientLoginController@logout')                            ->name('client.logout');

    Route::resource('/attendance', 'AttendanceController');
    Route::resource('/staff', 'StaffController');
    Route::resource('/setting', 'SettingController');
    Route::resource('/holiday', 'HolidayController');
});


// staff/user site routes
Route::get('/login', 'Auth\StaffLoginController@showLoginForm')                              ->name('staff.loginForm');
Route::post('/login', 'Auth\StaffLoginController@login')                                 ->name('staff.login');
Route::post('/logout', 'Auth\StaffLoginController@logout')                            ->name('staff.logout');

Route::resource('/calendar', 'CalendarController');