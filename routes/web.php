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

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('visit');

// Additional routing created during the project realization
use App\Http\Controllers\PagesController;
Route::get('/project', 'PagesController@project');
Route::get('/contact', 'PagesController@contact');

use App\Http\Controllers\FormsController;
Route::post('/contact', 'FormsController@send');

Route::resource('articles', 'ArticlesController')->middleware('visit');
