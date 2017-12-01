<?php

namespace Flobbos\LaravelSimpleHelper;

use Illuminate\Support\ServiceProvider;

class LaravelSimpleHelperServiceProvider extends ServiceProvider{
    
    public function boot(){
        $this->publishes([
            __DIR__.'/../config/simplehelper.php' => config_path('simplehelper.php'),
        ]);
    }

    /**
     * Register the service provider.
     */
    public function register(){
        $this->mergeConfigFrom(
            __DIR__.'/../config/simplehelper.php', 'simplehelper'
        );
        
        //load custom helpers with config
        if (count(config('simplehelper.custom_helpers'))) {
            foreach (config('simplehelper.custom_helpers') as $customHelper) {
                $file = app_path() . '/' . $this->getHelpersDirectory() . '/' . $customHelper . '.php';
                if(file_exists($file)) {
                    require_once($file);
                }
            }
        }
        //just load all of them
        else {
            foreach (glob(app_path() . '/' . $this->getHelpersDirectory() . '/*.php') as $file) {
                require_once($file);
            }
        }
    }
    
    public function getHelpersDirectory(){
        return config('simplehelper.directory', 'Helpers');
    }
}
