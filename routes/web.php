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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('test/{number}', function ($number){
//
//    $name = request('name');
//
//    $tests = [
//        'my-first-test' => 'Hello this is my first test',
//        'my-second-test' => 'Second test'
//    ];
//
//    return view('test', ['test'=>$tests[$number] ?? abort(404,'Sorry the page does not exist')]);
//});

Route::get('test/{number}', 'MyFirstController@show');

Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create','ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit','ArticlesController@edit');
Route::put('/articles/{article}','ArticlesController@update');

Route::get('/projects/','ProjectsController@index');
Route::get('/projects/{project}','ProjectsController@show');
Route::get('projects/{project}/edit','ArticlesController@edit');
