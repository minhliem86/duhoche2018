<?php namespace App\Modules\Admin\Middleware;

use Closure;
use Auth;
use Illuminate\Http\RedirectResponse;

class RedirectIfAuthencateAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
    protected $auth;

    public function __construct()
    {
        $this->auth = Auth::admin();
    }

	public function handle($request, Closure $next)
	{
        if ($this->auth->check())
        {
            return new RedirectResponse(url('/admin/dashboard'));
        }

		return $next($request);
	}

}
