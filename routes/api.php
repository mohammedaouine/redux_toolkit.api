<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

 

Route::get('/getproducts', [ProductController::class, 'showProducts']);

Route::get('/getpermissions', [ProductController::class, 'showPermission']);