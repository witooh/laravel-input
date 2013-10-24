<?php

namespace Witooh\LaravelInput;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Input extends Request {

    public function toCollection()
    {
        return new Collection($this->all());
    }
} 