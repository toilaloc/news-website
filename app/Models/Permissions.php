<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{

    protected $table = "permissions";

    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'slug'
    ];

    public function Roles() {

        return $this->belongsToMany(Roles::class,'roles_permissions', 'role_id', 'permission_id');
            
     }
     
     public function users() {
     
        return $this->belongsToMany(Users::class,'users_permissions');
            
     }
}
