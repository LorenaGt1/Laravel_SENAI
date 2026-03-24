<!DOCTYPE html>
<html lang="{{ str_replace("_","-", app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>
<body>
    <h1>Cadastro de produtos</h1>

    @if(session('sucess'))
        <p style="color:green">{{session('sucess')}} </p>
    @endif

    <form action="{{route('produto.salvar')}}" method="POST">
        @csrf
        <label for="nome"> Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome..." require value= "{{ old('nome')}}">

        <br><br>
        <label for="quantidade"> Quantidade:</label>
        <input type="quantidade" name="quantidade" id="quantidade" placeholder="Quantidade..." required value= "{{ old('quantidade')}}">
        
        <br><br>
        <label for="preco"> Preço: </label>
        <input type="preco" name="preco" id="preco" placeholder="Preço..." required value= "{{ old('preco')}}">


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