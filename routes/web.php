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


Auth::routes();
Route::get('change_locale/{locale}','LocalizationController@change')->name('change_locale');
Route::name('home.')->group(function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/me', 'HomeController@me')->name('me');
});


Route::name('colleges.')->prefix('colleges')->group(function(){
    Route::get('/', 'CollegesController@index')->name('index');
    Route::get('/{college}', 'CollegesController@show')->name('show');
    Route::get('/{college}/contact', 'CollegesController@contact')->name('contact');
});


Route::name('post.')->prefix('post')->group(function(){
    Route::get('/{post}', 'PostController@show')->name('show');
});



Route::name('group.')->prefix('group')->group(function(){
    Route::get('/{group}', 'GroupController@show')->name('show');
});


Route::name('contact.')->prefix('contact')->group(function(){
    Route::post('/subscribe', 'ContactController@subscribe')->name('subscribe');
    Route::get('/', 'ContactController@index')->name('index');
});

Route::get('/main', function () {
    return view('college.view');
});

Route::get('/vision-mission-goals', function () {
    return view('college.vision');
});

Route::get('/empty', function () {
    return view('college.none');
});

Route::get('/about-cs', function () {
    return view('college.about-cs');
});

Route::get('/about-cs-pro', function () {
    return view('college.about-cs-pro');
});

Route::get('/about-it-pro', function () {
    return view('college.about-it-pro');
});

Route::get('/about-sc-pro', function () {
    return view('college.about-sc-pro');
});

Route::get('/about-it', function () {
    return view('college.about-it');
});

Route::get('/about-sc', function () {
    return view('college.about-sc');
});

Route::get('/admission', function () {
    return view('college.admission');
});

Route::get('/study-plan-cs', function () {
    return view('college.study-plan-cs');
});

Route::get('/study-plan-it', function () {
    return view('college.study-plan-it');
});

Route::get('/study-plan-sc', function () {
    return view('college.study-plan-sc');
});



Route::get('/staff', function () {
  return view('college.collage_staff');
});

Route::get('/staff/part/{id}', function ($id) {
  return view('college.member_of_staff_part')->with('id' , $id);
});

Route::get('/staff/{id}', function ($id) {
  return view('college.member_of_staff')->with('id' , $id);
});

Route::get('/login', function () {
  return view('college.login');
});

Route::get('/staff/{id}/edit', function ($id) {
  return view('college.staff_edit')->with('id' , $id);
});



Route::get('/centers/{id}', function ($id) {
  return view('home.centers')->with('id' , $id);
});

Route::get('/center_1', function () {
  return view('home.center_1');
});

Route::get('/center_2', function () {
  return view('home.center_2');
});
