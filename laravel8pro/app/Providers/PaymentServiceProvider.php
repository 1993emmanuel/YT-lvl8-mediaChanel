<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\PaymentGateway\Payment;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('payment',function(){
            new Payment();
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
