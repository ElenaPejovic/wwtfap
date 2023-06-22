<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vozilo extends Model
{
    use HasFactory;
    # SVAKO VOZILO MOZE IMATI 1 RAM i 1 KABINU, ALI MOZE IMATI VISE TOVARNIH SANDUKA
    public function ram(){
        return $this->hasOne(Ram::class);
    }
    public function kabina(){
        return $this->hasOne(Kabina::class);
    }
    # JEDNO VOZILO MOZE IMATI 1 ILI VISE TOVARNIH SANDUKA
    public function sanduci(){
        return $this->hasMany(Sanduk::class);
    }
    
    public function tipVozila(){
        return $this->belongsTo(TipVozila::class);
    }
    public function nadogradnja(){
        return $this->hasOne(Nadogradnja::class);
    }
}
