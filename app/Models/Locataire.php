<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Locataire extends Authenticate
{
    use HasFactory;
    public function avis()
    {
        return $this->hasMany(Avis::class);
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    protected $fillable = ['nom','prenom','email','sexe','telephone','password','presentation','profil'];
 
}
