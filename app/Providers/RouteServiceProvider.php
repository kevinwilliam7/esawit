<?php

namespace App\Providers;

use App\Models\Kontribusi;
use App\Models\Pabrik\Pabrik;
use App\Models\Perkebunan\Perkebunan;
use App\Models\Sop;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });

        Route::bind('perkebunan', function ($id, $route) {
            $nama = $route->parameter('nama');
            return Perkebunan::where([
                'id'  => $id,
                'nama' => $nama,
            ])->firstOrFail();
        });

        Route::bind('pabrik', function ($id, $route) {
            $nama = $route->parameter('nama');
            return Pabrik::where([
                'id'  => $id,
                'nama' => $nama,
            ])->firstOrFail();
        });

        Route::bind('sop', function($id, $route){
            $jenis = $route->parameter('jenis');
            return Sop::where([
                'id' => $id,
                'jenis_izin' => $jenis
            ])->firstOrFail();
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
