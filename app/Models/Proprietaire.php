<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proprietaire extends Authenticate implements MustVerifyEmail
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard="proprietaire";
    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
    protected $fillable = ['nom','prenom','email','sexe','telephone','password','presentation'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
