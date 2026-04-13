<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de listar</title>
</head>
<body>
    <h1>Relatório de livros</h1>
    <table border="1">
        <thead>
            <a href="{{route('biblioteca.cadastro')}}">Cadastrar livro</a>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>AUTOR</th>
                <th>DESCRICAO</th>
                <th>NUMERO DE PAGINAS</th>
                <th>DATA DE PUBLICACAO</th>
                <th>CUSTO</th>
                <th>PRECO</th>
                <th>IMPOSTO</th>
                <th>Atualizar</th>
            </tr>
        </thead>
        <tbody>
            @forelse($biblioteca as $biblioteca)
                <tr>
                    <td>{{$biblioteca->id}}</td>
                    <td>{{$biblioteca->nome}}</td>
                    <td>{{$biblioteca->autor}}</td>
                    <td>{{$biblioteca->descricao}}</td>
                    <td>{{$biblioteca->numero_de_paginas}}</td>
                    <td>{{$biblioteca->data_de_publicacao}}</td>
                    <td>{{$biblioteca->custo}}</td>
                    <td>{{$biblioteca->preco}}</td>
                    <td>{{$biblioteca->imposto}}</td>
                    <td>
                        <a href="{{route('biblioteca.atualizar', $biblioteca->id)}}">Atualizar</a>
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="3"> Nenhum livro encontrado</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>