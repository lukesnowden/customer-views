<?php

namespace CustomerViews\Providers;

use CustomerViews\Laraview\CustomerEdit\CustomerEditView;
use Illuminate\Support\ServiceProvider;
use Laraview\Libs\Blueprints\RegisterBlueprint;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted( function( $app ) {
            //$app[ RegisterBlueprint::class ]->attachView( new CustomerEditView );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
