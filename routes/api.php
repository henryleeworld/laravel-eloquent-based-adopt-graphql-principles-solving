<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Restql\Restql;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('restql', function (Request $request) {
  // This is not a facade.
  return Restql::resolve($request);
});
