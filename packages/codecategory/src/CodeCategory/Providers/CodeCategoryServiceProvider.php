<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 20/01/2016
 * Time: 16:06
 */

namespace CodePress\CodeCategory\Providers;


use Illuminate\Support\ServiceProvider;

class CodeCategoryServiceProvider extends ServiceProvider
{
    /**
     * publishing package migrations to laravel
     * allowing the larevel can use routes and packet viwes
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../../resources/migrations/'=> base_path('database/migrations')]);
        $this->loadViewsFrom(__DIR__.'/../../resources/views/codecategory', 'codecategory');
        require __DIR__.'/../routes.php';

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