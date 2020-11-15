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

    public function Categories(){
        return $this->belongsToMany(Categories::class,'category_post', 'post_id', 'category_id');
    }

    public function Author()
    {
        return $this->belongsTo('App\Models\Users');
    }

}
