<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = "posts";

    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'slug',
        'content',
        'desc',
        'date',
        'vote',
        'status',
        'view',
        'author_id',
        'categories_id',
        'reviewer',
        'thumbnail'
    ];

    protected $casts = [
        'categories_id' => 'array',
    ];

    public function Categories()
    {
        return $this->belongsToMany(Categories::class, 'category_post', 'post_id', 'category_id');
    }

    public function Comment_post($id)
    {
        return Comments::where('post_id', $id)->whereNull('comment_id')->get();
    }

    public function hasComments()
    {
        return $this->hasMany(Comments::class, 'post_id');
    }


    public function tags()
    {
        return $this->belongsToMany('App\Models\Tags', 'post_tag', 'post_id', 'tag_id');
    }

    public function Author()
    {
        return $this->belongsTo('App\Models\Users');
    }
}
