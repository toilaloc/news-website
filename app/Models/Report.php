<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "report";
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
    public function Author(){
        return $this->hasOne(Users::class, 'id', 'author_id');
    }
    public function Post(){
        return $this->hasOne(Posts::class, 'id', 'post_id');
    }
    public function Comment(){
        return $this->hasOne(Comments::class, 'id', 'user_id');
    }
    public function reportComment(){
        return $this->hasOne(Comments::class, 'id', 'comment_id');
    }
}
