<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kabina;

class CabinController extends Controller
{
    //
    public function kabine(){
        $sveKabine = Kabina::all();
        return view('cabin.kabine',['sveKabine'=>$sveKabine]);
    }
    public function kabinaDetaljno($id){
        $kabina = Kabina::find($id);
        return view('cabin.kabinaDetaljno',['kabina'=>$kabina]);
    }
}
