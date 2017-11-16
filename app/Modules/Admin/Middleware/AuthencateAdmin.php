<?php namespace App\Modules\Admin\Middleware;

use Closure;
use Auth;

class AuthencateAdmin {

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
        if ($this->auth->guest())
        {
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect()->guest('admin/login');
            }
        }

		return $next($request);
	}

}
