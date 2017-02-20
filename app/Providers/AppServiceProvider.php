<?php

namespace App\Providers;

use App\Observers\RecipientObserver;
use App\Observers\RuleObserver;
use App\Recipient;
use App\Rule;
use Illuminate\Support\ServiceProvider;
use App\Message;
use App\Observers\MessageObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Message::observe(MessageObserver::class);
        Rule::observe(RuleObserver::class);
        Recipient::observe(RecipientObserver::class);
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
