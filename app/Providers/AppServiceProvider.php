<?php

   namespace App\Providers;

   use Illuminate\Support\ServiceProvider;
   use Illuminate\Pagination\Paginator;
   use Illuminate\Support\Facades\Blade;
   use Illuminate\Support\Facades\URL;

   class AppServiceProvider extends ServiceProvider
   {
       /**
        * Register any application services.
        *
        * @return void
        */
       public function register()
       {
           if (env('APP_ENV') !== 'local') {
               URL::forceScheme('https');
           }
       }
   }