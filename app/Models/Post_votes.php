<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post_votes extends Model
{
    protected $table = 'post_votes';
    public $timestamps = false;
    protected $fillable = [
        'post_id',
        'user_id',
        'rate',
    ];
}
