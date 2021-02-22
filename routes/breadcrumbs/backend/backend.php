<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.settings', function ($trail) {
    $trail->push('Settings', route('admin.settings'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
