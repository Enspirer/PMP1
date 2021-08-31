<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('shop')->group(function() {

    Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
        include_route_files(__DIR__.'/frontend/');
    });
});


/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */


/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__.'/backend/');
});

Breadcrumbs::for('admin.eshop_products.index', function ($trail) {
    $trail->push('Eshop Products', route('admin.eshop_products.index'));
});

Breadcrumbs::for('admin.eshop_products.create', function ($trail) {
    $trail->push('Eshop Products Create', route('admin.eshop_products.create'));
});

Breadcrumbs::for('admin.eshop_products.edit', function ($trail) {
    $trail->push('Eshop Products Edit', route('admin.eshop_products.edit',1));
});
