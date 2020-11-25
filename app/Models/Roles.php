<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model

{

    protected $table = "roles";

    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'slug'
    ];
    
    public function Permissions() {

        return $this->belongsToMany(Permissions::class,'roles_permissions', 'role_id', 'permission_id');
            
     }
     
     public function users() {
     
        return $this->belongsToMany(Users::class,'users_roles', 'user_id', 'role_id');
            
     }
}
