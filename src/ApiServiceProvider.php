<?php


use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register() {

    }

    /**
     * {@inheritdoc}
     */
    public function boot() {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \StrongNguyen29\ApiService\Console\MakeServiceCommand::class,
                \StrongNguyen29\ApiService\Console\MakeServiceInterfaceCommand::class,
                \StrongNguyen29\ApiService\Console\MakeServiceFacadeCommand::class
            ]);
        }

        $this->publishes([
            __DIR__. '/../Providers' => base_path('app/Providers'),
        ], 'service');
    }
}