<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\User\MyProfileController;
use App\Http\Controllers\Frontend\HomeController;
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

Route::get('portfolio/{id}', [MyProfileController::class, 'getPortfolio'])->name('get_portfolio');


Route::get('facebook_news', [HomeController::class, 'facebook_news'])->name('facebook_news');
Route::get('twitter_news', [HomeController::class, 'twitter_news'])->name('twitter_news');
