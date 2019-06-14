<?php

namespace App\Providers;

use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
//        Blade::compiler()->directive('rene', function ($expression) {
/*            return "<?php echo with({$expression})->format('F d, Y g:i a'); ?>";*/
//        });
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();

        $this->mapOAuthRoutes();

        $this->mapCustomerRoutes();

        $this->mapSupporterRoutes();

        $this->mapAdminRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    protected function mapOAuthRoutes()
    {
        Route::prefix('oauth')
            ->middleware(['web', 'guest'])
            ->namespace($this->namespace.'\Auth\oAuth')
            ->group(base_path('routes/oauth.php'));
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapCustomerRoutes()
    {
        Route::middleware(['web', 'auth'])
            ->namespace($this->namespace.'\Customer')
            ->prefix('customer')
            ->group(base_path('routes/customer.php'));
    }

    protected function mapSupporterRoutes()
    {
        Route::middleware(['web', 'auth', 'supporter'])
            ->namespace($this->namespace.'\Supporter')
            ->prefix('supporter')
            ->group(base_path('routes/supporter.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::middleware(['web', 'auth', 'admin'])
            ->namespace($this->namespace.'\Admin')
            ->prefix('admin')
            ->group(base_path('routes/admin.php'));
    }

}
