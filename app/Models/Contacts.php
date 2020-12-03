<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = "contacts";

    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'contact_name',	
        'contact_email',
        'contact_title',
        'contact_phone'	,
        'contact_message',
        'contact_reply',
        'created_at',
        'updated_at'
    ];
}
