<?php

namespace Witooh\LaravelInput\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input as LaravelInput;

class Input extends LaravelInput {

    public static function toCollection()
    {
        return new Collection(static::$app['request']->all());
    }
}
