<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('setting', function ($string) {
            return "<?php if(!empty(\App\Models\Setting::firstWhere('key', $string))){ echo \App\Models\Setting::firstWhere('key', $string)->value; }?>";
        });

        Blade::directive('event', function ($key) {
            return "<?php if(!empty(\App\Models\Event::find(1))){ echo \App\Models\Event::find(1)->$key; }?>";
        });
    }
}
