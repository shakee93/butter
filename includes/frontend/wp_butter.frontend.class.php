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
                Everything is mystery from here
            </div>
        <?php
    }
}