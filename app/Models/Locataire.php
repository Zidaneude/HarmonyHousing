<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locataire extends Model
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
}
