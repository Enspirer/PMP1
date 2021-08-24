<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TestController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\MyProjectController;
use App\Http\Controllers\Frontend\User\ViewProjectController;
use App\Http\Controllers\Frontend\User\PostProjectController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\User\MyProfileController;
/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('test', [TestController::class, 'index'])->name('test');





/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('my_projects/{section}', [MyProjectController::class, 'index'])->name('my_projects');
        Route::get('view_project/{project_id}/open_project', [ViewProjectController::class, 'index'])->name('view_project');

        //Profile Maintain
        Route::get('my_profile',[MyProfileController::class,'index'])->name('my_profile');
        Route::post('my_profile/portfolio/update',[MyProfileController::class,'portfolioUpdate'])->name('portfolio_update');


        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');

        // User Profile Specific
        Route::get('post_project', [PostProjectController::class, 'index'])->name('post_project');
    });
});
