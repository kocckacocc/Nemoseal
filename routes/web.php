<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin-dashboard', function () {
	return redirect('/admin');
});

Route::get('/admin', function () {
	return redirect('/admin');
});

Route::get('/clear-cache', function () {
	Artisan::call('cache:clear');
	Artisan::call('view:clear');
	return "Cache is cleared";
});

Route::get('/get_pdf', 'App\Http\Controllers\IndexController@get_pdf');

Route::any('/', 'App\Http\Controllers\IndexController@index');

Route::any('/{action}', 'App\Http\Controllers\IndexController@page');

Route::any('/kategoriak/{sub_action}', 'App\Http\Controllers\IndexController@page');

Route::any('/termekek/{sub_action}/{sub_parameter}', 'App\Http\Controllers\IndexController@page');

Route::any('/oldal/{action}', 'App\Http\Controllers\IndexController@oldal');
