<?php

namespace Wp_butter;

trait Singleton {

    /**
     * Singleton Instance
     *
     * @var static
     */
    protected static $instance;

    /**
     * Get Singleton Instance
     *
     * @return static
     */
    public static function instance()
    {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}