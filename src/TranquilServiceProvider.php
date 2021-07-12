<?php


namespace Kyle\Tranquil;


use Illuminate\Support\ServiceProvider;

class TranquilServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/../routes/tranquil.php';

        $this->loadViewsFrom(__DIR__.'/../resources/views','tranquil');
    }
}
