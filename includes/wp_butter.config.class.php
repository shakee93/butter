<?php

namespace Wp_butter;

class Config {

    public static $slug = "butter";
    public static $name = "WP Butter";

    /**
     * WordPress Version
     *
     * @var string
     */
    public static $wp_version;


    /**
     * WordPress Root Directory
     *
     * @var string
     */
    public static $wp_root;

    /**
     * WordPress Content Dir
     *
     * @var string
     */
    public static $wp_content_dir;

    /**
     * Butter Directory
     *
     * @var string
     */
    public static $butter_dir;


    /**
     * Singleton Instance
     *
     * @var Config
     */
    protected static $instance;


    /**
     * Core constructor.
     */
    public function __construct()
    {
        static::$wp_version = get_bloginfo('version');
        static::$wp_root = ABSPATH;
        static::$wp_content_dir = '/wp-content/';
        static::$butter_dir = static::$wp_content_dir . static::$slug;
    }


    /**
     * Get Singleton Instance
     *
     * @return Config
     */
    public static function instance()
    {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}