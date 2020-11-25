<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    public function roles() {

        return $this->belongsToMany(Roles::class,'roles_permissions');
            
     }
     
     public function users() {
     
        return $this->belongsToMany(Users::class,'users_permissions');
            
     }
}
