<?php

namespace App\Http\Middleware;

use App\Models\Roles;
use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles = null)
    {

        // Get role of current user
        $listRoles = DB::table('users')
        ->join('users_roles', 'users.id', '=', 'users_roles.user_id')
        ->join('roles', 'users_roles.role_id', '=', 'roles.id')
        ->where('users.id', Auth::id())
        ->select('roles.*')
        ->get()->pluck('id')->first();

       if($listRoles == 1 || $listRoles == 2 || $listRoles == 3){
            return $next($request);
       }else{
            abort(401);
       }

    }
}
