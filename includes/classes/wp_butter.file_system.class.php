<?php

namespace Wp_butter;

use League\Flysystem\Adapter\Local;
use \League\Flysystem\Filesystem;

class File extends Filesystem {


    /**
     * Singleton Instance
     *
     * @var Core
     */
    protected static $instance;


    /**
     * File constructor.
     */
    public function __construct()
    {
        $adapter = new Local(Config::$wp_root);
        parent::__construct($adapter);
    }


    /**
     * Get Singleton Instance
     *
     * @return File
     */
    public static function instance()
    {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self;
        }

        return self::$instance;
    }

}