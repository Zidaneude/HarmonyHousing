<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Logement;

class Appartement extends Model
{
    use HasFactory;
    public function logement(){
        return $this->belongsTo(Logement::class);
    }
}
