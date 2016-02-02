<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 28/01/2016
 * Time: 10:52
 */

namespace CodePress\CodeTag\Providers;


use Illuminate\Support\ServiceProvider;

class CodeTagServiceProvider extends ServiceProvider
{
    /**
     * publishing package migrations to laravel
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../../resources/migrations/'=> base_path('database/migrations')]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}