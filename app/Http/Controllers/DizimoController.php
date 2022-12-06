<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dizimo;
use App\Models\Membro;


class DizimoController extends Controller
{
    public function index(Request $request){

        $pesquisa = $request->pesquisa;
        if($pesquisa != ''){
            $dados = Membro::Where('nome', 'like', "%".$pesquisa."%")->paginate(1000);
        }else{
            $dados = Dizimo::paginate(10);
        } 
       
        
        $membro_id = Membro ::select('nome', 'id')->get();
        $dizimo = Dizimo::all();
    
        return view('dizimo.index', compact('membro_id', 'dados', 'dizimo'));
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
            dd($dizimo);
         }else{
            $dizimo = Dizimo::create($request->all());
         }

        return redirect('/dizimo');
    }
    public function delete($id){
        $dizimo = Dizimo::find($id);
        if(!empty($dizimo)){
            $dizimo->delete();
            return redirect('/dizimo')->with('success','Registro deletado com sucesso !');

        }else{
            return redirect('/dizimo')->with('danger','Registro não encontrado !');
        }
        
    }
}
