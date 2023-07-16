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

    protected $fillable = ['prix','nbre_bain','nombre_chambre','disponibilite','logement_id','equipe_bool','meuble','etage','num','a_photos1','a_photos2','a_photos3'];
}

