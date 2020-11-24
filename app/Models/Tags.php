<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'slug'
    ];

    public function hasPosts(){
        return $this->belongsToMany(Posts::class,'post_tag', 'post_id', 'tag_id')->orderBy('created_at', 'DESC');
    }
}
