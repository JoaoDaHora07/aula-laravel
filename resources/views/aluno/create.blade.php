<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('aluno.store') }}" method="POST">
        @csrf

            <h1>CADASTRO DE ALUNO</h1>

    <h3>NOME</h3>
   <input type="text" name="nome">
   <h3>CURSO</h3>
   <input type="text" name="curso">
   <h3>ANO</h3>
   <input type="text" name="ano">
   <br>
   <br>
   <button type="submit" value="Salvar">SALVAR</button>

    
    </form>


    
</body>
</html>