<?php

namespace App\Providers;

use App\Models\Akadem;
use App\Models\Berita;
use App\Models\Kemahasiswaan;
use App\Models\Tentang;
use App\Models\Unduhan;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['admin.layouts.sidebar', 'frontend.layouts.header'], function ($view) {
            $view->with([
                'tentangSubmenu' => Tentang::all(),
                'akademikSubmenu' => Akadem::all(),
                'beritaSubmenu' => Berita::all(),
                'kemahasiswaanSubmenu' => Kemahasiswaan::all(),
                'unduhanSubmenu' => Unduhan::all(),
            ]);
        });
    }
}
