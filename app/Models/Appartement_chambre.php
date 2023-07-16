<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement_chambre extends Model
{
    use HasFactory;
    protected $fillable = ['chambre_id','appartement_id'];
}
