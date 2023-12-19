<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable=['nomhotel','numtelephone','adresse','description','prixnuit','imagehotel'];
    
    public function reservations()
    {
        return $this->hasMany(reservation::class,"reservationID");
    }
}
