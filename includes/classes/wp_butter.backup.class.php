<?php

namespace Wp_butter;

class Backup {


    /**
     * Singleton Instance
     *
     * @var Backup
     */
    protected static $instance;


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
        return 'Here Comes Butter, Takes a look at the world for first time !!';
    }
}