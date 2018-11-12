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


Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('home', function () {
    return view('frontend.home');
});

Route::get('key-word-tag', function () {
    return view('frontend.key_word_tag');
});

Route::get('lo-trinh-hoc', function () {
    return view('frontend.lo_trinh_hoc');
});
Route::get('video', function () {
    return view('frontend.video');
});
Route::get('sitemap', function () {
    return view('frontend.sitemap');
});
Route::get('search', function () {
    return view('frontend.search');
});
Route::get('download-book', function () {
    return view('frontend.download_book');
});
Route::get('post-detail-1', function () {
    return view('frontend.post_detail_1');
});

use Modules\Admin\Entities\Role;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Entities\Permission;
Route::get('example',function()
{
    $owner = new Role();
    $owner->name         = 'owner';
    $owner->display_name = 'Project Owner'; // optional
    $owner->description  = 'User is the owner of a given project'; // optional
    $owner->save();

    $admin = new Role();
    $admin->name         = 'admin';
    $admin->display_name = 'User Administrator'; // optional
    $admin->description  = 'User is allowed to manage and edit other users'; // optional
    $admin->save();

    $user = Admin::where('name', '=', 'admin')->first();

    // role attach alias
    $user->attachRole($admin); // parameter can be an Role object, array, or id

    // or eloquent's original technique
    // $user->roles()->attach($admin->id); // id only


    $createPost = new Permission();
    $createPost->name         = 'create-post';
    $createPost->display_name = 'Create Posts'; // optional
    // Allow a user to...
    $createPost->description  = 'create new blog posts'; // optional
    $createPost->save();

    $editUser = new Permission();
    $editUser->name         = 'edit-user';
    $editUser->display_name = 'Edit Users'; // optional
    // Allow a user to...
    $editUser->description  = 'edit existing users'; // optional
    $editUser->save();

    $admin->attachPermission($createPost);
    // equivalent to $admin->perms()->sync(array($createPost->id));

    $owner->attachPermissions(array($createPost, $editUser));

    echo $user->hasRole('owner');   // false
    echo $user->hasRole('admin');   // true
    echo $user->can('edit-user');   // false
    echo $user->can('create-post'); // true
});