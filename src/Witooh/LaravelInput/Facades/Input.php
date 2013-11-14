<?php

namespace Witooh\LaravelInput\Facades;

use Illuminate\Support\Facades\Facade;

class Input extends Facade {

    /**
     * Get an item from the input data.
     *
     * This method is used for all request verbs (GET, POST, PUT, and DELETE)
     *
     * @param  string $key
     * @param  mixed  $default
     * @return mixed
     */
    public static function get($key = null, $default = null)
    {
        return static::$app['Witooh\LaravelInput\Input']->input($key, $default);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'Witooh\LaravelInput\Input'; }}