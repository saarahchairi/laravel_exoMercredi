<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;


Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/info', function () {
    return view('infos.contact.info');
})->name("info");

Route::get('/partenariat', function () {
    return view('infos.contact.partenariat');
})->name("partenariat");

Route::get('/sav', function () {
    return view('infos.contact.sav');
})->name("sav");

Route::get('/backend', [BackController::class,"back"])->name("backend");

Route::get('/frontend', [FrontController::class,"front"])->name("frontend");
