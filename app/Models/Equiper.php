<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equiper extends Model
{
    use HasFactory;

    protected $fillable = ['chambre_id','equipement_id'];
}
