<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $table = "notifications";
    protected $primaryKey = "id";
    protected $fillable = [
       'reporter_id',
       'user_id',	
       'post_id',	
       'comment_id',
        'reason',	
        'type'
    ];

    public function Reporter(){
        return $this->hasOne(Users::class, 'id', 'reporter_id');
    }
    public function User(){
        return $this->hasOne(Users::class, 'id', 'user_id');
    }
    public function Post(){
        return $this->hasOne(Posts::class, 'id', 'post_id');
    }
    public function hasPost(){
        return $this->hasMany(Posts::class, 'post_id');
    }
    public function Comment(){
        return $this->hasOne(Comments::class, 'id', 'user_id');
    }
}
