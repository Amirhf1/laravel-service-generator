<?php

namespace Amirhf\LaravelServiceGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Amirhf\LaravelServiceGenerator\Skeleton\SkeletonClass
 */
class LaravelServiceGeneratorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-service-generator';
    }
}
