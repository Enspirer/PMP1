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

Route::prefix('projects')->group(function() {
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


Breadcrumbs::for('admin.project_category.index', function ($trail) {
    $trail->push('Project Category', route('admin.project_category.index'));
});

Breadcrumbs::for('admin.project_category.edit', function ($trail) {
    $trail->push('Project Category Edit', route('admin.project_category.edit',1));
});

Breadcrumbs::for('admin.tallents.index', function ($trail) {
    $trail->push('Tallents', route('admin.tallents.index'));
});

Breadcrumbs::for('admin.tallents.create', function ($trail) {
    $trail->push('Tallents Create', route('admin.tallents.create'));
});

Breadcrumbs::for('admin.tallents.edit', function ($trail) {
    $trail->push('Tallents Edit', route('admin.tallents.edit',1));
});

Breadcrumbs::for('admin.project_leeds.index', function ($trail) {
    $trail->push('Project Leeds', route('admin.project_leeds.index'));
});
Breadcrumbs::for('admin.project_leeds.edit', function ($trail) {
    $trail->push('Project Leeds Status', route('admin.project_leeds.edit',1));
});

