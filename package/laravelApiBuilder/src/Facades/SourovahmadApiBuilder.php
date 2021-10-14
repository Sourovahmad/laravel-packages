<?php


namespace Sourovahmad\LaravelApiBuilder\Facades;
use Illuminate\Support\Facades\Facade;
use Sourovahmad\LaravelApiBuilder\Controllers\ApiControllSection;


class SourovahmadApiBuilder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return new ApiControllSection();
    }
}

