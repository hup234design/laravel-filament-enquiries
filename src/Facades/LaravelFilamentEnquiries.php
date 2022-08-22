<?php

namespace Hup234design\LaravelFilamentEnquiries\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hup234design\LaravelFilamentEnquiries\LaravelFilamentEnquiries
 */
class LaravelFilamentEnquiries extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Hup234design\LaravelFilamentEnquiries\LaravelFilamentEnquiries::class;
    }
}
