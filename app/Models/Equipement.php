<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;
    public function logements()
    {
        return $this->belongsTo(Logement::class);
    }
    protected $fillable = ['nom'];
}
