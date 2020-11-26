<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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
