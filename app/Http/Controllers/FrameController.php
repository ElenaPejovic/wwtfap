<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ram;

class FrameController extends Controller
{
    //
    public function ramovi(){
        $sviRamovi = Ram::all();
        return view('frame.ramovi',['sviRamovi'=>$sviRamovi]);
    }
    public function ramDetaljno($id){
        $ram = Ram::find($id);
        return view('frame.ramDetaljno',['ram'=>$ram]);
    }
}
