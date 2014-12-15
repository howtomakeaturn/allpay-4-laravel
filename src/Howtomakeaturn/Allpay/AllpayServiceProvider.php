<?php

namespace Howtomakeaturn\Allpay;

use Illuminate\Support\ServiceProvider;

class AllpayServiceProvider extends ServiceProvider {

    public function register()
    {
        // Register 'gdrive'
        $this->app['allpay'] = $this->app->share(function($app)
        {
            $w = new Manager();
            $w->loadConfigs();
            return $w;
        });
    }

}
