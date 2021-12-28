<?php

namespace Aislandener\OpenSSLCustom;

use AislanDener\OpenSSLCustom\OpenSSLCustomService;
use Illuminate\Support\ServiceProvider;

class OpenSSLCustomProvider extends ServiceProvider{
    public function boot(){
        $configPath = __DIR__. '/../config/open_ssl_custom.php';
        if(function_exists('config_path')){
            $publishPath = config_path('open_ssl_custom.php');
        }else{
            $publishPath = base_path('config/open_ssl_custom.php');
        }

        $this->publishes([
            $configPath => $publishPath
        ]);
    }

    public function register()
    {
        $configPath = __DIR__ . '/../config/open_ssl_custom.php';
        $this->mergeConfigFrom($configPath, 'open_ssl_custom');

        $this->app->singleton('OpenSSLCustom', function (){
            return new OpenSSLCustomService();
        });
    }

}
