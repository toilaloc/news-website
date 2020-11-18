<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'content',
        'post_id',
        'user_id',
        'comment_id'
    ];


    public function Comments()
    {

        return $this->hasMany('App\Models\Comments', 'comment_id');
    }

    public function subComments()
    {

        return $this->hasMany('App\Models\Comments', 'comment_id');
    }

    public function Posts()
    {
        return $this->belongsToMany(Posts::class, 'category_post', 'post_id', 'category_id');
    }
    public function Author()
    {
        return $this->belongsTo('App\Models\Users', 'user_id', 'id');
    }
}
