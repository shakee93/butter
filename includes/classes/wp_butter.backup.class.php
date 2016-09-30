<?php

namespace Wp_butter;

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

class Backup {

    /**
     * FileSystem Instance
     *
     * @var Filesystem
     */
    protected $filesystem;


    /**
     * Singleton Instance
     *
     * @var Backup
     */
    protected static $instance;


    /**
     * Backup constructor.
     */
    public function __construct()
    {
        $adapter = new Local(Core::$wp_root);
        $this->filesystem = new Filesystem($adapter);
    }


    /**
     * Get Singleton Instance
     *
     * @return Backup
     */
    public static function instance()
    {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self;
        }

        return self::$instance;
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