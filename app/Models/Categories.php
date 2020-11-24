<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 
        'slug', 
        'description', 
        'category_id'
    ];


    public function categories(){

        return $this->hasMany('App\Models\Categories', 'category_id');  
    }
    
    public function subcategories(){

        return $this->hasMany('App\Models\Categories', 'category_id');
    }

    public function parent() {
        return $this->belongsTo(Categories::class, 'category_id');
    }
    
    public function childs() {
        return $this->hasMany(Categories::class, 'category_id');
    }

    public function getPosts($id){
        $data =   Posts::whereHas('categories', function($query) use ($id) {
            $query->whereId($id);
          })->orderBy('created_at', 'DESC')->get();
        return $data;
    }

    public function Posts(){
        return $this->belongsToMany(Posts::class, 'category_post', 'post_id', 'category_id');
    }

}
