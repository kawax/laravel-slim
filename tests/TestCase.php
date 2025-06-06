<?php

declare(strict_types=1);

namespace Tests;

use Revolution\Slim\SlimServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Load package service provider.
     *
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getPackageProviders($app): array
    {
        return [
            SlimServiceProvider::class,
        ];
    }

    /**
     * Load package alias.
     *
     * @param  \Illuminate\Foundation\Application  $app
     */
    protected function getPackageAliases($app): array
    {
        return [
            //
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
        //
    }
}
