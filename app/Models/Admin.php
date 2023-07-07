<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticate
{
    use HasFactory;
    public function offres()
    {
        return $this->hasMany(Offre::class);
    }
    protected $fillable = ['email','password'];
}
