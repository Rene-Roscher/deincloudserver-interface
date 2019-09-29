<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('customer.dashboard', function ($trail) {
    $trail->push('Dashboard', route('customer.dashboard'));
});
