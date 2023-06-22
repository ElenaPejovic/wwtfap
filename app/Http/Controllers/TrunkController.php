<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanduk;

class TrunkController extends Controller
{
    //
    public function sanduci(){
        $sviSanduci = Sanduk::all();
        return view('trunk.sanduci',['sviSanduci'=>$sviSanduci]);
    }
    public function sandukDetaljno($id){
        $sanduk = Sanduk::find($id);
        return view('trunk.sandukDetaljno',['sanduk'=>$sanduk]);
    }
}
