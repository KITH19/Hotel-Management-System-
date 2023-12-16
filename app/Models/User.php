<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory,Notifiable;
    protected $fillable = ['name', 'email', 'mobile','city','dob','gender', 'password'];
    protected $hidden = ['password'];
    public $timestamps = false;

    
  

    /**
     * The attributes that should be cast to native types. 
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /**
     * Get the encrypted password for the user.
     *
     * @param  string  $value
     * @return string
     */
    public function getPasswordAttribute($value)
    {
        return bcrypt($value);
    }
    public function isAdmin()
{
    return $this->is_admin;
}
}


