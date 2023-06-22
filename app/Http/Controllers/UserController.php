<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kabina;
use App\Models\Ram;
use App\Models\Sanduk;

class UserController extends Controller
{
    //
    public function homepage(){
        return view('homepage');
    }
    
}
