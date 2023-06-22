<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vozilo;
use App\Models\Ram;
use App\Models\Kabina;
use App\Models\Sanduk;
use App\Models\Tip;
use App\Models\Nadogradnja;


class AdminController extends Controller
{
    //
    public function dealsForm(){
        return view('deals',[
            'sviRamovi'=>Ram::all(),
            'sveKabine'=>Kabina::all(),
            'sviSanduci'=>Sanduk::all(),
            'sviTipovi'=>Tip::all(),
            'sveNadogradnje'=>Nadogradnja::all(),
        ]);
    }
    public function deals(Request $request){
        $vehicle = new Vozilo();
        $vehicle->serijski_broj = $request->input('serijski_broj');
        $vehicle->tip_id = $request->input('tip_id');
        $vehicle->kabina_id = $request->input('kabina_id');
        $vehicle->ram_id = $request->input('ram_id');
        $vehicle->sanduk_id = $request->input('sanduk_id');
        $vehicle->nadogradnja_id = $request->input('nadogradnja_id');
        $vehicle->status = 'processing';
        $vehicle->save();
        return redirect(route('homepage'));
    }
    public function listDeals(){
        return view('listDeals', ['svaVozila'=>Vozilo::all()]);
    }
    public function dealDetail($id){
        $vozilo = Vozilo::find($id);
        return view('dealDetail', ['vozilo'=>$vozilo]);
    }
    public function changeStatus(Request $request, $id){
        $deal = Vozilo::find($id);
        $deal->status = $request->input('status','0');
        $deal->save();
        return redirect(route('deals-list'));
    }

    
}
