<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membro;

class MembroController extends Controller
{
    public function index(Request $request){
        
        $pesquisa = $request->pesquisa;
        if($pesquisa != ''){
            $dados = Membro::Where('nome', 'like', "%".$pesquisa."%")->paginate(1000);
        }else{
            $dados = Membro::paginate(10);
        } 
       
        
        return view('membro.index', compact('dados'));
    }

    public function create(){
        return view('membro.form');

    }
    
    public function edit($id){
        $membro = Membro::find($id);
       return view('membro.form', compact('membro'));
    }

    public function store(Request $request){

        if($request->id != ''){
            $membro = Membro::find($request->id);
            $membro->update($request->all());
        }else{
            $membro = Membro::create($request->all());
        }
       
        return redirect('/membro');
    }

    public function delete($id){
        $membro = Membro::find($id);
        if(!empty($membro)){
            $membro->delete();
            return redirect('/membro')->with('success', 'Deletado com sucesso!');
        } else {
            return redirect('/membro')->with('danger', 'Registro não encontrado!');
        }
    }
}
