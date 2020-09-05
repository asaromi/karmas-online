<?php

namespace AsalNgoding\Fpdf\Providers;

use Illuminate\Support\ServiceProvider;

class FpdfServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Fpdf', function ($app) {
            return new Fpdf();
        });
        
        $this->app->bind('PDF_Code128', function ($app) {
            return new PDF_Code128();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
