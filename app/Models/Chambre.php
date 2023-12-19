<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable=['type','Disponibilité','descriptionchambre','numchambre','prixnuit'];   

    public function reservations()
    {
        return $this->hasMany(reservation::class,"reservationID");
    }
}

