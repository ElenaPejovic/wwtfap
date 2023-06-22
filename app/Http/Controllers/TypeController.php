<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tip;

class TypeController extends Controller
{
    //
    public function tipovi(){
        $sviTipovi = Tip::all();
        return view('type.tipovi',['sviTipovi'=>$sviTipovi]);
    }
    
}
