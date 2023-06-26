<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    public function remboursement()
    {
        return $this->hasOne(Remboursement::class);
    }

    public function reservation()
    {
        return $this->hasOne(Reservation::class);
    }
}
