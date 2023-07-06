<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    public function logements()
    {
        return $this->belongsTo(Logement::class);
    }

    public function admins()
    {
       return $this->belongsTo(Admin::class);
    }

    public  function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }

    protected $fillable = ['titre','description','status','proprietaire_id'];

}
