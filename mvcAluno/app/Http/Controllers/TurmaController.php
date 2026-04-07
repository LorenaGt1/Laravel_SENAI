<?php

namespace App\Http\Controllers;
use App\Models\Turma;

use Illuminate\Http\Request;

class TurmaController extends Controller {

    public function listar() {
        $query = Turma::query();
        $turmas = $query->get();
        return view('listar', compact('turmas'));
    }
    
    public function add(Request $request){

    $request->validate([
        'numSala'=> 'required|numeric|max:255',
        'serie'=> 'required|string|max:255'
    ]);

    Turma::create([
        'numSala'=>$request->numSala,
        'serie'=>$request->serie
    ]);

    return redirect()->back()->with('success','Turma Cadastrada com sucesso!');
    }



    public function atualizar ($id){
        $turma = Turma::findOrFail($id);
        return view('atualizar', compact('turma'));
    }

    public function update (Request $request, $id){
        $request->validate([
            'numSala'=>'required|int',
            'serie'=>"required|string|max:255|unique:turmas,serie,$id"
        ]);

        $turma = Turma::findOrFail($id);

        $turma->numSala = $request->numSala;
        $turma->serie = $request->serie;

        $turma->save();
        return redirect()->back()->with('success','Turma Atualizada com sucesso!'); 
    }

    

    public function deletar($id){
        $turma = Turma::findOrFail($id);
        $turma->delete();

        return redirect()->route('turma.listar')->with('success', 'Turma excluída com sucesso!');
    }
}