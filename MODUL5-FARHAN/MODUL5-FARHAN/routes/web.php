<?php

use App\Http\Controller\showroomcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
});

Route::get('/showroom', [showroomcontroller::class, 'index'])->,name('showroom.index');
Route::get('/showroom/create', [showroomcontroller::class, 'index'])->,name('showroom.index');
Route::get('/showroom/store', [showroomcontroller::class, 'index'])->,name('showroom.index');

