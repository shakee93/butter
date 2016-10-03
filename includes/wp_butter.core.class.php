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
     * Actions Array
     *
     * @var array
     */
    public static $actions = array();

    /**
     * Core constructor.
     */
    public function __construct()
    {
        $this->autoload();
        $this->initialize();
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
     * Initialize the plugin components
     *
     */
    public function initialize()
    {
        Config::instance();
        Frontend::instance()->initFronted();
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
        register_activation_hook(\PLUGIN_BASE_FILE, [$this, 'activation'] );

        foreach (static::$actions as $action) {
            add_action(
                $action['tag'],
                $action['function_to_add'],
                $action['priority'],
                $action['accepted_args']
            );
        }
    }

    public static function add_action($tag, $function_to_add, $priority = 10, $accepted_args = 1)
    {
        array_push(static::$actions, [
            'tag' => $tag,
            'function_to_add' => $function_to_add,
            'priority' => $priority,
            'accepted_args' => $accepted_args
        ]);
    }

    /**
     * Initialize Plugin Api
     */
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
     * On Plugin Activation
     *
     */
    public function activation()
    {
        $this->make_butter_directory();
    }


    /**
     * Make Butter Content Directory
     */
    public function make_butter_directory()
    {

        $filesystem = File::instance();

        // Create htaccess file to block access for apache
        $filesystem->write(
            Config::$butter_dir . '/.htaccess',
            "deny from all"
        );

        // Create web.config file to block access for windows
        $filesystem->write(
            Config::$butter_dir . '/web.config',
            "<configuration>\n\t<system.webServer>\n\t\t<authorization>\n\t\t\t<deny users=\"*\" />\n\t\t</authorization>\n\t</system.webServer>\n</configuration>\n"
        );

    }


    /**
     * Check Plugin Dependencies
     */
    public function dependency_check()
    {
        // we will check all the dependencies this plugin needs here
    }
}

/*
 * Bootstrap the Plugin
 */
Core::instance();