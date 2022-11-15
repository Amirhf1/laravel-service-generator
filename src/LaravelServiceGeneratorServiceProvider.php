<?php

namespace Amirhf\LaravelServiceGenerator;

use Amirhf\LaravelServiceGenerator\Console\MakeService;
use Illuminate\Support\ServiceProvider;


class LaravelServiceGeneratorServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                [
                    MakeService::class,
                ]
            );
        }
    }
}