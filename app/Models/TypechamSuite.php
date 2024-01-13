<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypechamSuite extends Model
{
    use HasFactory;
    protected $fillable=['type','Disponibilite','descriptionchambre','numchambre','prixnuit'];

}
