<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    use HasFactory;
    # MOZE POSTOJATI VISE VOZILA ISTOG TIPA
    public function vozilo(){
        return $this->hasMany(Vozilo::class);
    }
}

