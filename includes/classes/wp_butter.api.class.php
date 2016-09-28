<?php

namespace Wp_butter;

class Api {

    /**
     * Namespace of the Api
     *
     * @var string
     */
    protected static $namespace = 'butter/v1';


    /**
     * Array of Routes which needs to be registered
     *
     * @var array
     */
    protected static $routes = array();


    /**
     * Register All the Routes
     *
     */
    public static function initApi()
    {
        add_action( 'rest_api_init', function () {

            foreach (static::$routes as $route) {
                register_rest_route( static::$namespace , $route['endpoint'], array(
                    'methods' => $route['method'],
                    'callback' => $route['callback'],
                ) );
            }

        } );
    }


    /**
     * Add a Route to Route Array
     *
     * @param $endpoint
     * @param $callback
     */
    public static function get($endpoint, $callback)
    {
        $object = [
            'method' => 'GET',
            'endpoint' => $endpoint,
            'callback' => $callback,
        ];

        array_push(static::$routes, $object);
    }
}