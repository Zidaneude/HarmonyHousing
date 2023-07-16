<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const CONNEXION_LOCATAIRE = '/connexion-locataire';
    public const HOME = '/';
    public const CONNEXION_PROPRIETAIRE = '/connexion-proprietaire';
    public const DASHBORD = '/proprietaire-dashbord';
    public const DASHBORD_ADMIN = '/admin/dasboard';
   // public const DASHBORD_LOCATAIRE = '/profil-locataire';


    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
            Route::middleware('web')
                ->group(base_path('routes/proprietaire_routes.php'));
            Route::middleware('web')
                ->group(base_path('routes/locataire_routes.php'));
            Route::middleware('web')
                ->group(base_path('routes/admin_routes.php'));
        });
    }
}
