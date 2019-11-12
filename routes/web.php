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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(array('prefix' => 'dashboard','as'=>'admin.','middleware'=>'auth','namespace' => 'Admin'), function() {
    Route::get('/', 'indexController@index')->name('layout.main');
    Route::resource('contacts', 'contactController');
    Route::resource('users', 'userController');
    Route::resource('members', 'memberController');
    Route::resource('actions', 'actionController');
    Route::resource('participants', 'participantController');
    Route::resource('partners', 'partnerController');
    Route::resource('galleries', 'galleryController');
    Route::resource('subscribers', 'subscribeController');
    Route::resource('ambassadors', 'ambassadorController');
    Route::resource('sliders', 'sliderController');
    Route::resource('settings', 'SettingController');
});

Route::group(array('as'=>'website.','middleware'=>'auth','namespace' => 'website'), function() {
    Route::get('/', 'indexController@index')->name('index');
    Route::get('/about', 'indexController@about')->name('about');
    Route::get('/contact', 'indexController@contact')->name('contact');
    Route::get('/gallery', 'indexController@gallery')->name('gallery');
    Route::get('/gallery', 'indexController@gallery')->name('gallery');
    Route::get('/all-actions', 'indexController@all_actions')->name('all-actions');

    Route::get('/action/{id}', 'indexController@action')->name('action');
    Route::get('/sofra-singel/{id}', 'indexController@sofra_singel')->name('sofra-singel');

    Route::post('/contacts', 'indexController@postContacts')->name('Contacts');


});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
