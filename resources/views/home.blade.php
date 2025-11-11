@extends('templates/main',
    [
        'titulo'=>"Sistema Aula",
        'cabecalho' => 'Home - Dashboard',
        'rota' => '',
        'relatorio' => '',
        'class' => App\Models\Aluno::class,
    ]   
)

@section('conteudo')

@endsection