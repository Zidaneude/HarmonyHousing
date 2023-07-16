<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appartement;
use App\Models\Chambre;

class Logement extends Model
{
    use HasFactory;
    public function offres()
    {
        return $this->belongsTo(Offre::class);
    }

    public function avis()
    {
        return $this->hasMany(Avis::class);
    }

    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }

    public function equipement()
    {
        return $this->hasMany(Equipement::class);
    }
    public function chambre(){
    return  $this->hasOne(Chambre::class);
    }
    public function appartement(){
        return  $this->hasOne(Appartement::class);
        }

    protected $fillable = ['adresse','quartier','region','ville','code_postal','frequence_paie','c_photos1','c_photos2','c_photos3','offre_id','type'];
}
