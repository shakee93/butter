<?php

namespace Wp_butter\Controllers;

use League\Flysystem\Filesystem;
use Wp_butter\Config;
use Wp_butter\File;
use Wp_butter\Singleton;

class Backup extends Controller {

    use Singleton;

    /**
     * FileSystem Instance
     *
     * @var Filesystem
     */
    protected $filesystem;


    /**
     * Backup constructor.
     */
    public function __construct()
    {
        $this->filesystem = File::instance();
    }


    /**
     * Hello World
     *
     * @param \WP_Rest_Request $request
     * @return string
     */
    public function start(\WP_Rest_Request $request)
    {
        $version = Config::$wp_version;
        return $version;
    }
}