<?php

use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\helloworldcontroller;
use App\Http\Controllers\HtmlController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route ::get('helloworld', [helloworldcontroller :: class, 'index'] );
route ::get('ambilfile', [helloworldcontroller :: class, 'ambilfile'] );
route ::get('getlorem', [HtmlController :: class, 'getLorem'] );
route ::get('gettabel', [LatihanController :: class, 'getTabel'] );
route ::get('getform', [LatihanController :: class, 'getForm'] );
