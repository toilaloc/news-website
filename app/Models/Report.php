<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "report";
    protected $primaryKey = "id";
    protected $fillable = [
       'reporter_id',
       'user_id',	
       'post_id',	
       'comment_id',
        'reason',	
        'type'
    ];
}
