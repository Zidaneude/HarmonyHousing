<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equiper2 extends Model
{
    use HasFactory;
    protected $fillable = ['appartement_id','equipement_id'];
}
