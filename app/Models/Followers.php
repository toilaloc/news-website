<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Followers extends Model
{
    protected $table = 'followers';
    public $timestamps = false;
    protected $fillable = [
        'post_id',
        'user_id'
    ];
}
