<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Sourovahmad\Unzipper\Facades\SourovahmadUnzipper;
use Sourovahmad\LaravelApiBuilder\Facades\SourovahmadApiBuilder;

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

Route::get('/', function()
{

    return view('welcome');
    // SourovahmadApiBuilder::store('url', 'data');
});

    // SourovahmadUnzipper::unzip('hello');


Route::post('submitForm', function (Request $request) {


    //  SourovahmadUnzipper::unzip($request->file);
    return $request;


})->name('submitForm');



Route::get('getData', function()
{
    SourovahmadUnzipper::getZipData('1632553485');

});


Route::view('ui', 'sourovahmad.simpleUI.index');
