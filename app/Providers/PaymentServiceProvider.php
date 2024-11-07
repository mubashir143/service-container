<?php

namespace App\Providers;

use App\paymentService\paypalAPI;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(paypalAPI::class, function () {
            return new paypalAPI(transaction_id: "the test code is - " . rand(0, 1500));
        });
    }
    
    

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
