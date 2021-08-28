<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\User\MyProfileController;
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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('check_email', [LoginController::class, 'check_email'])->name('check_email');

Route::post('check_phone_no', [LoginController::class, 'check_phone_no'])->name('check_phone_no');
