<?php

namespace App\Http\Middleware;

use App\Models\Permissions;
use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CheckPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permissions = null)
    {

        // Get role of current user
        $listRoles = DB::table('users')
        ->join('users_roles', 'users.id', '=', 'users_roles.user_id')
        ->join('roles', 'users_roles.role_id', '=', 'roles.id')
        ->where('users.id', Auth::id())
        ->select('roles.*')
        ->get()->pluck('id')->toArray();

        // Get permission of current user
        $listRoles = DB::table('roles')
        ->join('roles_permissions', 'roles.id', '=', 'roles_permissions.role_id')
        ->join('permissions', 'roles_permissions.permission_id', '=', 'permissions.id')
        ->whereIn('roles.id', $listRoles)
        ->select('permissions.*')
        ->get()->pluck('id')->unique();

      

        $checkPermissions = Permissions::where('slug', $permissions)->value('id');

       if($listRoles->contains($checkPermissions)){
            return $next($request);
       }else{
            abort(401);
       }
        
    }
}
