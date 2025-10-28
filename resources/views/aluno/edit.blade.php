<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('aluno.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')

            <h1>EDITAR ALUNO</h1>

    <h3>NOME</h3>
   <input type="text" name="nome" value="{{ $aluno->nome }}">
   <h3>CURSO</h3>
   <input type="text" name="curso" value="{{ $aluno->curso }}">
   <h3>ANO</h3>
   <input type="text" name="ano" value="{{ $aluno->ano }}">
   <br>
   <br>
   <button href="{{ route('aluno.index') }}" type="submit" value="Voltar">VOLTAR</button>
   <button type="submit" value="Salvar">ATUALIZAR</button>

    
    </form>