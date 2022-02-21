<?php

use Illuminate\Routing\Route as RoutingRoute;
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
    return view( 'welcome', [
        'name' => 'Kittinan Noimanee',
        'phone' => '0817846230',
        'exp' => 666,
        'try_this' => '<br /><b>This</b> is a <u>book</u>.'
    ] ) ;

});

// //----| TEST Class & Route
// class Service {
//     //
// }
// Route::get( '/', function( Service $service ) {
//     echo '555' ;
// } ) ;