<?php

Route::group(['middleware' => 'web', 'prefix' => 'authenticate', 'namespace' => 'Modules\Admin\Http\Controllers'], function()
{
    Route::get('/login', 'AdminController@getLogin')->name('get.admin.login');
    Route::post('/login', 'AdminController@postLogin')->name('post.admin.login');
    Route::get('/logout', 'AdminController@getLogout')->name('get.admin.logout');
});


Route::group(['middleware' => 'web', 'prefix'=> 'admin'], function() {
  Route::get('dashboard', 'Modules\Admin\Http\Controllers\AdminController@index')->name('get.dashboard');
});
   


use Modules\Admin\Entities\Role;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Entities\Permission;
Route::get('example1',function()
{

    $user = Admin::where('id', '=', '1')->first();
    echo $user->can('create-post'); // true
});