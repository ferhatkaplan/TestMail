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

Route::get('/home', [App\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/change-password', [App\App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');
Route::get('/change-password', [App\App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');

Route::get('send-email', function(){
    $mailData = [
        "name" => "Test NAME",
        "dob" =>  "12/12/1990"
    ];
    Mail::to("ferhatkaplan2742@gmail.com")->send(new TestEmail($mailData));
    dd("Mail Send Succesfully");
});

