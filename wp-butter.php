<?php

/*
Plugin Name: WP Butter
Plugin URI: wpbutter.io
Description: A backup plugin
Author: Trait Labs
Version: 1.0
Author URI: traitlabs.io
*/

namespace Wp_butter;

require_once 'includes/wp_butter.class.php';

const PLUGIN_DIR = __DIR__;

Core::instance()->initialize();
