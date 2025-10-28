<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="{{ route('aluno.create') }}">NOVO ALUNO</a></h1>
    @foreach ($alunos as $item)
        <h1>{{$item->nome}} | {{$item->curso}} | {{$item->ano}} <a href="{{ route('aluno.edit', $item->id) }}">ALTERAR</a> <form action="{{ route('aluno.destroy', $item->id) }}" method="POST">@csrf @method('DELETE') <button type="submit">DESTRUIR</button></form></h1>
        
    @endforeach
    
</body>
</html>