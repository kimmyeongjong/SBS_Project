<?php

Route::get('/joinus',function ()
{
    return view('welcome');
});


Route::get('/test','TestController@test');

Route::get('/', 'MainPageController@goMain');

Route::get('/go','CategoryController@allCategory');

Route::post('no','MainPageController@temp');

Route::post('/login', 'UserController@login');
Route::get('/login', 'MainPageController@goMain');
Route::get('/logout','UserController@logout');
Route::post('/register','UserController@register');
Route::get('/register','MainPageController@goMain');
Route::get('test2',function ()
{
    return view('test');
});
// Route::post('/login', 'Auth\LoginController@login');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/university/{university_num}',function ()
{
    return view('welcome');
});

Route::get('/university',function ()
{
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getUniversityNames','UniversityController@universityNames');

Route::post('/products','BoardController@products');
Route::get('/products','BoardController@products');//나중에 삭제
Route::get('/roommate','BoardController@roommate');
Route::get('/studygroup','BoardController@studyGroup');
Route::get('/passroom','BoardController@passRoom');
Route::get('/getcategory','CategoryController@allCategory');
