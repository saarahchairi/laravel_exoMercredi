<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/backend', function () {
    return view('team.web.dev.backend');
})->name("backend");

Route::get('/frontend', function () {
    return view('team.web.dev.frontend');
})->name("frontend");
