<?php

namespace Wp_butter;

class Frontend {

    use Singleton;


    /**
     * Initialize Frontend
     */
    public function initFronted()
    {
        Core::add_action('admin_menu', [$this, 'registerMenu']);
        Core::add_action('admin_enqueue_scripts', [$this, 'add_scripts']);
    }


    /**
     * Register Admin Area Menu
     */
    public function registerMenu()
    {
        add_menu_page(
            Config::$name,
            Config::$name,
            'edit_theme_options',
            Config::$slug, [$this,'registerPage'],
            'dashicons-editor-removeformatting',
            null  );

    }


    /**
     * Register Admin Area Page
     */
    public function registerPage(){
        ?>
            <div class="wrap" id="butter-app">
                <app></app>
            </div>
        <?php
    }

    public function add_scripts($hook)
    {
        if(!strstr($hook, 'butter')) {
            return;
        }

        wp_register_style(
            'butter-app-css',
            plugins_url('/public/css/app.css', \PLUGIN_BASE_FILE),
            false, '1.0.0'
        );

        wp_register_style(
            'butter-app-material-icon',
            'https://fonts.googleapis.com/icon?family=Material+Icons',
            false, '1.0.0'
        );

        wp_register_style(
            'roboto-font',
            'https://fonts.googleapis.com/css?family=Roboto:400,500,900',
            false, '1.0.0'
        );

        wp_enqueue_style( 'butter-app-css' );
        wp_enqueue_style( 'butter-app-material-icon' );
        wp_enqueue_style( 'roboto-font' );


        wp_enqueue_script(
            'butter-app-bundle-js',
            plugins_url('/public/js/app.bundle.js', \PLUGIN_BASE_FILE),
            null,
            null,
            true
        );
    }
}