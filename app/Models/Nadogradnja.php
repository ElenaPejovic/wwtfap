<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nadogradnja extends Model
{
    use HasFactory;
    public function vozila(){
        return $this->belongsTo(Vozilo::class);
    }
}
