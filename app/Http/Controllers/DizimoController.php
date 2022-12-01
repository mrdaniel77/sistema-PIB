<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dizimo;
use App\Models\Membro;


class DizimoController extends Controller
{
    public function index(){

        $membro_id = Membro ::select('nome', 'id')->get();
        return view('dizimo.index', compact('membro_id'));
    }
    public function create(){
        $membro_id = Membro ::select('nome', 'id')->get();
        return view('dizimo.form', compact('membro_id'));
    }
    public function edit($id){

       $dizimo = Dizimo::find($id);
        return view('dizimo.index', compact('dizimo'));
    }
    public function store(Request $request){
        
        if($request->id != ''){
            $dizimo = Dizimo::find($request->id);
            $dizimo->update($request->all());
         }else{
            $dizimo = Dizimo::create($request->all());
         }

        return view('/dizimo');
    }
    public function delete($id){
        $dizimo = Dizimo::find($id);
        if(!empty($dizimo)){
            $dizimo->delete();
            return view('/dizimo')->with('success','Registro deletado com sucesso !');

        }else{
            return view('/dizimo')->with('danger','Registro não encontrado !');
        }
        
    }
}
