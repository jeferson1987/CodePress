<?php
/**
 * Created by PhpStorm.
 * User: jeferson
 * Date: 20/01/2016
 * Time: 17:10
 */

namespace CodePress\CodeTag\Tests;

use Orchestra\Testbench\TestCase;

abstract class AbstractTestCase extends TestCase
{
    /**
     * Command to generate migrations with artisan via php
     */
    public function migrate()
    {
        $this->artisan('migrate',[
            '--realpath' => realpath(__DIR__.'/../src/resources/migrations')
        ]);

    }

    /**
     *
    generating provider to find matching sluggable package
     * @param $app
     * @return array
     */
    public function getPackageProviders($app)
    {
        return [
            \Cviebrock\EloquentSluggable\SluggableServiceProvider::class
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

}