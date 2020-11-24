<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Model
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'username',
        'fullname',
        'email',
        'bio',
        'address',
        'gender',
        'phone',
        'active',
        'thumbnail',
        'vote',
        'status',
        'follower',
        'following',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasPosts()
    {
        return $this->hasMany(Posts::class, 'author_id');
    }
    public function hasComments()
    {
        return $this->hasMany(Comments::class, 'user_id');
    }
    public function hasFollowers(){
        return $this->hasMany(Followers::class, 'user_id');
    }
    public function Following(){
        return $this->hasMany(Followers::class, 'author_id');
    }
}
