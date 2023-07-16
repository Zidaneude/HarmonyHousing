<?php

namespace App\Models;

use App\Models\Logement;
use App\Models\Equipement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chambre extends Model
{
    use HasFactory;
    public function logement(){
        return $this->belongsTo(Logement::class);
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipement::class, 'chambre_equipements');
    }

    protected $fillable = ['prix','nbre_bain','equipe_bool','disponibilite','titre','logement_id','meuble','capacite','superficie','c_photos1','c_photos2','c_photos3'];
}
