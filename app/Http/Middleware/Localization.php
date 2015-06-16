<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Application;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\Auth\Guard;
use App\Models\UserProfile;

/**
 * Localization
 */
class Localization {

    public function __construct(Application $app, Redirector $redirector, Guard $auth) {
        $this->app        = $app;
        $this->auth       = $auth;
        $this->redirector = $redirector;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if ($this->auth->check()) {
            // get setting language from user profile
            $profile = $this->auth->user()->profile;

            if($profile instanceof UserProfile) {
                if(!is_null($profile->language)) {
                    $this->app->setLocale($profile->language);
                }
            }

        }

        return $next($request);
    }
}
?>