<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nadogradnja;
class UpgradeController extends Controller
{
    //
    public function nadogradnje(){
        $sveNadogradnje = Nadogradnja::all();
        return view('upgrade.nadogradnje',['sveNadogradnje'=>$sveNadogradnje]);
    }
    public function nadogradnjaDetaljno($id){
        $nadogradnja = Nadogradnja::find($id);
        return view('upgrade.nadogradnjaDetaljno',['nadogradnja'=>$nadogradnja]);
    }
}
