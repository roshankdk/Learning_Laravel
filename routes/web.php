<?php

use App\Http\Controllers\Sitecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [sitecontroller::class,'getHome']);
Route::get('/service',[Sitecontroller::class,'getService']);