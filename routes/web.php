<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Roles;
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
Route::get('/', function(){
    return redirect(route('home'));
});

Route::view('/login', '/auth/home');
Auth::routes();
Auth::routes(['verify' => true]);


Route::get('home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'home'], function () {
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::get('report', 'ReportController@index')->name('report')->middleware('roles:'.Roles::$_role["USER"]);
    Route::get('quiz', 'QuizController@index')->name('quiz')->middleware('roles:'.Roles::$_role["USER"]);

    Route::group(['prefix' => 'users', 'middleware' => 'roles:'.Roles::$_role["ADMIN"]], function () {
        Route::get('/', 'UserController@index')->name('users');
        Route::get('/new', 'UserController@add')->name('add-new-user');


        Route::post('/store', 'UserController@store')->name('store-user');
        Route::post('/destroy', 'UserController@destroy')->name('delete-user')->middleware('password.confirm');
    });

    Route::group(['prefix' => 'material', 'middleware' => 'roles:'.Roles::$_role["ADMIN"]], function () {
        Route::get('/', 'MaterialController@index')->name('materials');

        Route::group(['prefix' => '/{material_id}/question', 'middleware' => 'password.confirm'], function () {
            Route::get('/', 'QuestionController@question')->name('material-question');
            Route::get('/new', 'QuestionController@add')->name('add-question');
            Route::get('/{id}/edit', 'QuestionController@details')->name('question-detail');
            Route::get('/{id}/show', 'QuestionController@show')->name('question-show-detail')->middleware('password.confirm');

            Route::post('/store', 'QuestionController@store')->name('store-question');
            Route::post('/edit', 'QuestionController@update')->name('edit-question');
            Route::post('/destroy', 'QuestionController@destroy')->name('delete-question');
        });
    });
});
