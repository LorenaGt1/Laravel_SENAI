<!DOCTYPE html>
<html lang="{{ str_replace("_","-", app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro dos livros</title>
</head>
<body>
    <h1>Cadastro de livros</h1>

    @if(session('sucess'))
        <p style="color:green">{{session('sucess')}} </p>
    @endif
    <a href="{{route('biblioteca.listar')}}">Listar Livros</a>
    <form action="{{route('biblioteca.salvar')}}" method="POST">
        @csrf
        <label for="nome"> Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome..." require value= "{{ old('nome')}}">

        <br><br>
        <label for="autor"> Autor:</label>
        <input type="text" name="autor" id="autor" placeholder="Autor..." required value= "{{ old('autor')}}">
        
       
         <br><br>
        <label for="descricao"> Descrição:</label>
        <input type="text" name="descricao" id="descricao" placeholder="Descrição..." required value= "{{ old('descricao')}}">

         <br><br>
        <label for="numero_de_paginas"> Numero de paginas:</label>
        <input type="number" name="numero_de_paginas" id="numero_de_paginas" placeholder="Numero de paginas..." required value= "{{ old('numero de paginas')}}">

        <br><br>
        <label for="data_de_publicacao"> Data de publicação: </label>
        <input type="date" name="data_de_publicacao" id="data_de_publicacao" placeholder="Data de publicação..." required value= "{{ old('data de publicacao')}}">

        <br><br>
        <label for="custo"> Custo: </label>
        <input type="text" name="custo" id="custo" placeholder="Custo..." required value= "{{ old('custo')}}">

        <br><br>
        <label for="preco"> Preço: </label>
        <input type="text" name="preco" id="preco" placeholder="Preço..." required value= "{{ old('preco')}}">

        <br><br>
        <label for="imposto"> Imposto: </label>
        <input type="text" name="imposto" id="imposto" placeholder="Imposto..." required value= "{{ old('imposto')}}">

        <input type="submit" value="Cadastrar">

        
    </form>

    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach($errors->all() as $erro)
                <li>{{ $erro }}</li>
                @endforeach
            </ul>

        </div>
        @endif


</body>
</html>