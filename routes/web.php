<?php

use App\Http\Controllers\PageContoller;
use Illuminate\Support\Facades\Route;

Route::controller(PageContoller::class)->group(function () {
    Route::get('/product', 'index')->name("index");
});



