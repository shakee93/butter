<?php

namespace Wp_butter;

class Core {

    /**
     * Singleton Instance
     *
     * @var Core
     */
    protected static $instance;


    /**
     * Initialize the plugin
     *
     */
    public function initialize()
    {
        $this->autoload();
        $this->dependency_check();
        $this->register_actions();
        $this->initiateApi();
    }


    /**
     * Get Singleton Instance
     *
     * @return Core
     */
    public static function instance()
    {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self;
        }

        return self::$instance;
    }


    /**
     * Autoload Required Classes
     *
     */
    public function autoload()
    {
        require __DIR__ . '/../vendor/autoload.php';
    }


    /**
     * Register Required Actions
     *
     */
    public function register_actions()
    {
        add_action( 'tgmpa_register', [$this, 'register_dependencies'] );
    }

    public function initiateApi()
    {
        include 'routes.php';
        Api::initApi();
    }


    /**
     * Add Plugin Dependencies to the project | tgmpa
     *
     */
    public function register_dependencies()
    {
        $plugins = [
            [
                'name' => 'WordPress REST API',
                'slug' => 'rest-api',
                'required' => true,
            ]
        ];

        $config = array(
            'is_automatic' => true,
        );

        tgmpa($plugins, $config);
    }


    /**
     * Check Plugin Dependencies
     */
    public function dependency_check()
    {
        // we will check all the dependencies this plugin needs here
    }
}

/**
 * Initiate the Plugin
 */
Core::instance()->initialize();