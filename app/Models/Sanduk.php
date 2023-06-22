<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanduk extends Model
{
    use HasFactory;
    public function vozilo(){
        return $this->belongsTo(Vozilo::class);
    }
}
