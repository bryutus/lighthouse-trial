<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Carbon\Carbon;

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

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the user's created at in asia/tokyo timezone.
     *
     * @param string $value
     * @return string
     */
    public function getCreatedAtAttribute(string $value): Carbon
    {
        return (new Carbon($value))->setTimezone('Asia/Tokyo');
    }

    /**
     * Get the user's updated at in asia/tokyo timezone.
     *
     * @param string $value
     * @return string
     */
    public function getUpdatedAtAttribute(string $value): Carbon
    {
        return (new Carbon($value))->setTimezone('Asia/Tokyo');
    }
}
