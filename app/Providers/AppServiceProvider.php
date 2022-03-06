<?php

namespace App\Providers;

use App\Http\Resources\PostResource;
use App\Interfaces\DataInterface;
use App\Services\DataService;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\HandlerInterface;
use App\Services\HandlerService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        PostResource::withoutWrapping();
        $this->app->bind(
            DataInterface::class,
            DataService::class);
        $this->app->bind(
            HandlerInterface::class,
            HandlerService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
