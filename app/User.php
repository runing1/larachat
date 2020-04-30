<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //返回用户头像
//    public function avatar()
//    {
//        return "https://www.gravatar.com/avatar/" . md5(strtolower($this->email)) . "?d=retro&s=64";
//    }

    public function message()
    {
        return $this->hasMany(Message::class);
    }
}
