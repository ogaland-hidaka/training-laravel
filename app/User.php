<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\JwtTrait;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, JwtTrait;
    use SoftDeletes;

    protected $connection = 'auth_mysql';

    protected $table = 'users';

    protected $fillable = [
        'name','user_first_name','user_last_name','user_type', 'email', 'password', 'api_token', 'personal_img_file_path'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}