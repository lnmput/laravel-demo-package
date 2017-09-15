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
    }
}
