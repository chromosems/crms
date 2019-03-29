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

use Illuminate\Support\Facades\Input;
use App\User;


Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
/**
 * this is to authorize access, using middleware thus access control restriction
 */
Route::middleware('auth', 'isAdmin')->namespace('Admin')->group(function () {
    Route::get('admin/users', "UsersController@index")->name('admin.users');
    Route::get('admin/user/{id}', 'UsersController@getUser')->name('admin.user');
    Route::post('admin/users/store', "UsersController@store")->name('admin.users.store');
    Route::put('admin/user/update', 'UsersController@update')->name('admin.user.update');
    Route::get('admin/prospects', "prospectController@index")->name('admin.prospects');
    Route::get('admin/prospect/{id}',"prospectController@show")->name('admin.prospect');

    Route::any('/search', function () {
        $search = Input::get('search');
        $user = User::where('name', 'LIKE', '%' . $search . '%')->orWhere('email', 'LIKE', '%' . $search . '%')->orWhere('id', 'LIKE', '%' .$search . '%')->get();
        if (count($user) > 0)
            return view('admin.welcome')->withDetails($user)->withQuery($search);
        else
            return view('admin.welcome')->withMessage('No Details found. Try to search again !');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
