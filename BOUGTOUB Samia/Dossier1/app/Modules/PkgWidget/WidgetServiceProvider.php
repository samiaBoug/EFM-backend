<?php
namespace Modules\PkgWidget ;

use Illuminate\Support\ServiceProvider;

class WidgetServiceProvider extends ServiceProvider{
    public function register(){

    }
    
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations'); 
        $this->loadViewsFrom(__DIR__ . '/Views', 'pkgWidget');
        $this->loadTranslationsFrom(__DIR__.'/lang' , 'pkgWidget');
        
    }
}