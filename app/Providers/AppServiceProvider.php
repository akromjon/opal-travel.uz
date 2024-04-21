<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\Partner;
use App\Models\TourPackage;
use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        view()->composer('pages.tour.extend', function ($view) {
            $view->with('tours',TourPackage::orderBy("id","desc")->get());
        });

        view()->composer('pages.gallery.extend', function ($view) {
            $view->with('galleries',Gallery::orderBy("id","desc")->get());
        });

        view()->composer('pages.partner.extend', function ($view) {
            $view->with('partners',Partner::orderBy("id","desc")->get());
        });
    }
}
