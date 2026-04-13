<?php

namespace App\Http\Controllers;
use App\Models\Biblioteca;

use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function listar(){
        $query = Biblioteca::query();
        $biblioteca = $query-> get();
        return view ('listar', compact('biblioteca'));
    }

    public function add (Request $request){
        $request -> validate([
           'nome' => "required|string|max:255",
           'autor' => "required|string|max:255",
           'descricao' => "required|string|max:255",
           'numero_de_paginas' => 'required|string|max:255',
           'data_de_publicacao' => 'required|date',
           'custo'=>'required|string|max:255',
           'preco'=>'required|string|max:255',
           'imposto'=>'required|string|max:255',
        ]);

        Biblioteca::create([
            'nome' => $request-> nome,
            'autor'=> $request->autor,
            'descricao'=>$request->descricao,
            'numero_de_paginas' =>$request->numero_de_paginas,
            'data_de_publicacao'=>$request->data_de_publicacao,
            'custo' => $request->custo,
            'preco' => $request ->preco,
            'imposto' =>$request->imposto
        ]);

        return redirect()->back()->with('success', "Livro cadastrado com sucesso!");
    }

    public function atualizar($id){
        $biblioteca = Biblioteca::findOrFail($id);
        return view('atualizar', compact('biblioteca'));
    }

    public function update(Request $request, $id){
        $request->validate ([
            'nome'=> 'required|string|max:255',
            'autor'=> "required|string|max:255",
            'descricao'=>'required|string|max:255',
            'numero_de_paginas' => 'required|string|max:255',
            'data_de_publicacao'=> 'required|date',
            'custo'=>'required|string|max:255',
            'preco'=>'required|string|max:255',
            'imposto'=>'required|string|max:255'
        ]);

        $biblioteca = Biblioteca::findOrFail($id);

        $biblioteca->nome=$request->nome;
        $biblioteca->autor=$request->autor;
        $biblioteca->descricao=$request->descricao;
        $biblioteca->numero_de_paginas=$request->numero_de_paginas;
        $biblioteca->data_de_publicacao=$request->data_de_publicacao;
        $biblioteca->custo=$request->custo;
        $biblioteca->preco=$request->preco;
        $biblioteca->imposto=$request->imposto;

        $biblioteca->save();
        return redirect()->back()->with("success", 'Livro atualizado com sucesso!');

}
}