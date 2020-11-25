<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author_votes extends Model
{
    protected $table = 'author_votes';
    public $timestamps = false;
    protected $fillable = [
        'author_id',
        'user_id',
        'rate',
    ];
}
