<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotelID','type','nom','prenom','email','numero_tel','date_debut','date_fin','nombre_personnes','message'
        ];


 
    public function hotels(){
        return $this->belongsTo(Hotel::class,"hotelID");

    }
  

}
