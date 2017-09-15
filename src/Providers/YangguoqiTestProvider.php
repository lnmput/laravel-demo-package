<?php

namespace Yangguoqi\Test\Providers;

use Illuminate\Support\ServiceProvider;
use Yangguoqi\Test\Controllers\UcWord;

class YangguoqiTestProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ucword', function () {
           return new UcWord();
        });
        include dirname(dirname(__FILE__)).'/routes.php';
    
        $this->loadViewsFrom(dirname(dirname(__FILE__)).'/Views', 'test');
    
        $this->publishes([
            dirname(dirname(__FILE__)).'/Views' => base_path('resources/views/vendor/test'),
            dirname(dirname(__FILE__)).'/Config/uc.php' => config_path('uc.php'),
            dirname(dirname(__FILE__)).'/Assets' => public_path('vendor/test'),
        ]);
    }
}
