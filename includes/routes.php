<?php

namespace Wp_butter;

use Wp_butter\Controllers\Backup;

Api::get('/world', function (\WP_Rest_Request $request) {
    return Backup::instance()->start($request);
});