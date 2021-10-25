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


Route::post('email-subscription/store', [HomeController::class, 'emailSubscriptionStore'])->name('email_subscription_store');




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
        Route::post('my_profile/store',[MyProfileController::class,'profileStore'])->name('profile_store');
        Route::post('my_profile/update/profile-info',[MyProfileController::class,'profileInfoUpdate'])->name('profile_info_update');
        Route::post('my_profile/update/specialized',[MyProfileController::class,'profileSpecializedUpdate'])->name('profile_specialized_update');
        Route::post('my_profile/update/company-size',[MyProfileController::class,'profileCompanySizeUpdate'])->name('profile_company_size_update');
        Route::post('my_profile/update/skills',[MyProfileController::class,'profileSkillsUpdate'])->name('profile_skills_update');
        Route::post('my_profile/update/license',[MyProfileController::class,'profileLicenseUpdate'])->name('profile_license_update');
        Route::post('my_profile/update/awards',[MyProfileController::class,'profileAwardsUpdate'])->name('profile_awards_update');
        Route::post('my_profile/update.others',[MyProfileController::class,'profileOthersUpdate'])->name('profile_others_update');

        Route::post('my_profile/portfolio/store',[MyProfileController::class,'portfolioStore'])->name('portfolio_store');
        // Route::get('my_profile/portfolio/edit/{id}',[MyProfileController::class,'portfolioEdit'])->name('portfolio_edit');
        Route::post('my_profile/portfolio/update',[MyProfileController::class,'portfolioUpdate'])->name('portfolio_update');
        Route::get('my_profile/portfolio/delete/{id}',[MyProfileController::class,'portfolioDelete'])->name('portfolio_delete');
       

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');

        // User Profile Specific
        Route::get('post_project', [PostProjectController::class, 'index'])->name('post_project');
        Route::post('post_project/store', [PostProjectController::class, 'store'])->name('post_project.store');



        Route::post('user/project-search',[DashboardController::class,'projectSearch'])->name('project_search');

        Route::post('my-profile/account-information/update', [MyProfileController::class, 'accountInformationUpdate'])->name('account_information_update');
        Route::post('my-profile/password/update', [MyProfileController::class, 'accountPasswordUpdate'])->name('account_password_update');
    });
});
