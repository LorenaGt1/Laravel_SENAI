<!DOCTYPE html>
<html lang="{{str_replace ('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar livro</title>
</head>
<body>
    <h1>Atualizar livro</h1>

    @if (@session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{route('biblioteca.update', $biblioteca->id)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="">Nome:</label>
        <input type="text" name="nome" value="{{ old('nome', $biblioteca->nome)}}" required><br><br>

        <label for="">Autor:</label>
        <input type="text" name="autor" value="{{ old('autor', $biblioteca->autor)}}" required><br><br>

        <label for="">Descrição:</label>
        <input type="text" name="descricao" value="{{ old('descricao', $biblioteca->descricao)}}" required><br><br>

        <label for="">Número de páginas:</label>
        <input type="text" name="numero_de_paginas" value="{{old ('numero_de_paginas', $biblioteca->numero_de_paginas)}}" required><br><br>

        <label for="">Data de publicação:</label>
        <input type="date" name="data_de_publicacao" value="{{old ('data_de_publicacao', $biblioteca->data_de_publicacao)}}" required><br><br>

        <label for="">Custo:</label>
        <input type="text" name="custo" value="{{old ('custo', $biblioteca->custo)}}" required><br><br>

        <label for="">Preço: </label>
        <input type="text" name="preco" value="{{old ('preco', $biblioteca->preco)}}" required><br><br>

        <label for="">Imposto:</label>
        <input type="text" name="imposto" value="{{old ('imposto', $biblioteca->imposto)}}" required><br><br>

        <button type="submit">Atualizar</button>
    </form>

    @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>                    
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>