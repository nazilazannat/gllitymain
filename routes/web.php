<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/profile',      'UserController@profile');
Route::post('update-ava','UserController@update_avatar');

Route::get('changestatus', 'UserController@status')->name('changestatus');

// Route::get('users/{id}', '');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
});


Route::get('Zilla',        'AreaController@Zilla');
Route::post('ZillaInsert', 'AreaController@ZillaInsert');
Route::get('Thana',        'AreaController@Thana');
Route::post('ThanaPost',   'AreaController@ThanaInsert');

Route::get('blood-Req',  'RequesrController@index');
Route::post('saveblood', 'RequesrController@InsertMessage');

Route::get('doner', 'DonerfilterController@index');
Route::get('search-doner', 'DonerfilterController@index');
Route::get('thanaC/{cat_id}', 'DonerfilterController@getThana');
Route::get('getDoner}', 'DonerController@getDoner');

