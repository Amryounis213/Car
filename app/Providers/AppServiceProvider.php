<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\CarModel;
use App\Models\Color;
use App\Models\WebsiteSetting;
use App\Models\WebsiteStatic;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        $brands = Brand::get();
        $models = CarModel::get();
        $colors = Color::get();
        view()->share('models', $models);
        view()->share('brands', $brands);
        view()->share('colors', $colors);
        //
        $SETTING= WebsiteSetting::first();
        view()->share('SETTING',$SETTING);
        //
        $website = WebsiteStatic::select('title', 'sub_title', 'image', 'logo')->first();
        view()->share('website',$website);
        
    }
}
