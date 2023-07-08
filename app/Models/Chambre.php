<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Logement;

class Chambre extends Model
{
    use HasFactory;
    public function logement(){
        return $this->belongsTo(Logement::class);
    }
    protected $fillable = ['prix','nbre_bain','disponibilite','titre','logement_id','meuble','capacite','superficie','photos1','photos2','photos3'];
}
