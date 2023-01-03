<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dizimo;
use App\Models\Membro;


class DizimoController extends Controller
{
    public function index(Request $request){


        $filtro = $request->filtro;
        
        if($filtro != ''){
            $oi = Membro::where('nome','like', "%".$filtro."%")->paginate(10);
        }else{
            $oi = Dizimo::paginate(10);
        }


        $dizimo = Dizimo::with('membro')->get();

        return view('dizimo.index', compact('dizimo','oi'));
  
    }
    public function create(){
        $membro = Membro::select('id','nome')->get();
        return view('dizimo.form', compact('membro'));
    }
    public function edit($id){
        $dizimo = Dizimo::find($id);

        return view('dizimo.form', compact('dizimo'));

    }
    public function store(Request $request){
        
        if($request->id != ''){
            $dizimo = Dizimo::find($request->id);
            $dizimo->update($request->all());
        }else{
            $dizimo = Dizimo::create($request->all());
        }

        return redirect('/dizimo');
    }
    public function delete($id){

       $dizimo = Dizimo::find($id);

        if(!empty($dizimo)){
            $dizimo->delete();
        }else{
            echo"Erro, registro não existe";
        }
        
        return redirect('/dizimo');
    }
}
