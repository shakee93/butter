<?php

namespace Wp_butter;

Api::get('/world', function (\WP_Rest_Request $request) {
    return Backup::instance()->start($request);
});
