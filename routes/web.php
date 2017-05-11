<?php

Route::get('/', function()
{
    return view('index');
});

Route::get('tv','TvController@index');
Route::get('tv/{tv}','TvController@show');
Route::get('tv/cat/{cat}','TvController@catTvChannel');

Route::group(['prefix'=>'adminzone', 'middleware' => 'auth'], function()
{
    Route::get('/', function()
    {
        return view('admin.index');
    });
    Route::get('/logout', function()
    {
        \Illuminate\Support\Facades\Auth::logout();
        \Illuminate\Support\Facades\Session::flush();
        return redirect(url('login'));
    });
    Route::resource('channels','ChannelsController');
    Route::resource('categories','CategoriesController');
});

Auth::routes();