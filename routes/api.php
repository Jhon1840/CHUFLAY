<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('usuarios',[UserController::class,'index'])->name('usuarios');

Route::get('/docs', '\L5Swagger\Http\Controllers\SwaggerController@api')->name('l5swagger.api');