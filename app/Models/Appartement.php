<?php

namespace App\Models;

use App\Models\Chambre;
use App\Models\Logement;
use App\Models\Equipement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appartement extends Model
{
    use HasFactory;
    public function logement(){
        return $this->belongsTo(Logement::class);
    }


    public function chambres()
    {
        return $this->belongsToMany(Chambre::class,'appartement_chambres');
    }


    public function equipements()
    {
        return $this->belongsToMany(Equipement::class, 'appartement_equipements');
    }

    protected $fillable = ['prix','nbre_bain','nombre_chambre','disponibilite','logement_id','equipe_bool','meuble','etage','num','a_photos1','a_photos2','a_photos3'];
}

