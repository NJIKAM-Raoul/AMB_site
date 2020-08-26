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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'Dashbord\AmbController@index');

Route::get('/architecture', function()
{
    return view('architecture');
});
Route::get('/entretien', function()
{
    return view('entretien');
});
Route::get('/formation', function()
{
    return view('formation');
});
Route::get('/topographie', function()
{
    return view('topographie');
});

Route::get('/ingenierie', function()
{
    return view('ingenierie');
});

Route::get('dashbord', 'Dashbord\DashbordController@index');

Route::post('dashbord', 'Dashbord\DashbordController@ajouter')->name('store_path');
