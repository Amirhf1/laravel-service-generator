<?php

namespace Amirhf\LaravelServiceGenerator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Amirhf\LaravelServiceGenerator\Skeleton\SkeletonClass
 */
class LaravelServiceGeneratorFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-service-generator';
    }
}
