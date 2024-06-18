<?php

namespace App\Providers;

use App\Repositories\AuthRepository;
use App\Repositories\BannerRepository;
use App\Repositories\GaleriRepository;
use App\Repositories\Interfaces\AuthInterface;
use App\Repositories\Interfaces\BannerInterface;
use App\Repositories\Interfaces\GaleriInterface;
use App\Repositories\Interfaces\PenjualanInterface;
use App\Repositories\Interfaces\PesawatInterface;
use App\Repositories\Interfaces\TiketKapalInterface;
use App\Repositories\PenjualanRepository;
use App\Repositories\PesawatRepository;
use App\Repositories\TiketKapalRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PesawatInterface::class, PesawatRepository::class);
        $this->app->bind(AuthInterface::class, AuthRepository::class);
        $this->app->bind(BannerInterface::class, BannerRepository::class);
        $this->app->bind(PenjualanInterface::class, PenjualanRepository::class);
        $this->app->bind(TiketKapalInterface::class, TiketKapalRepository::class);
        $this->app->bind(GaleriInterface::class, GaleriRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
