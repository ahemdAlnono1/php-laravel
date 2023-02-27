<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerController;
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
//     return view('welcome');
// });
// Route::get('/about' , function(){
    
//     return view('about');
// });
Route::get('/' , [StaticController::class , 'index'])-> name('home.index');
Route::get('/about' , [StaticController::class , 'about']) -> name('home.about');
Route::get('/protofolio' , [StaticController::class , 'protofolio'])-> name('home.protofolio');
Route::get('/contact' , [StaticController::class , 'contact']) -> name('home.contact');
Route::resource('computers', ComputerController::class);

Route::get('/any' , function(){
    $filter = request('style');
    if(isset($filter)){                // this to remove tags and element from string
        return '<h1>this page is show '.strip_tags($filter).'</h1>';
    }else{
        return '<h1>this page is show all product</h1>';
    }
});
//        this is to reseve routes and use it in the page
Route::get('/store/{category?}/{item?}' , function($category = null ,$item = null){
    if(isset($category)&&isset($item)){
        return '<h1>the '.$category.' and page the item is '.$item.' </h1>';
    }
    return '<h3>the item not set yet</h3>';
});