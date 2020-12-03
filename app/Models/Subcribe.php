<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcribe extends Model
{
    protected $table = 'subcribe';

    protected $fillable = [ 
        'email',
        'author_id',
    ];

    public function Author()
    {
        return $this->belongsTo('App\Models\Users', 'author_id', 'id');
    }
}
