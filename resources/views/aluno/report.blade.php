<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Relatório de Alunos - Sistema Aula </title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <div class="texto-marca-dagua"> IFPR - PARANAGUÁ </div>
    <div class="texto-restrito-cima"> DOCUMENTO GERADO PELO SISTEMA AULA </div>
    <hr>
    <table style="margin: 0px auto; width: 100%">
        <tbody>
            <tr>
                <td style="width: 75px; text-align: left;">
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/img/logo_ifpr.png'))) }}" width="78" height="78" style="border-radius: 25%;">
                </td>
                <td style="width: 1fr; text-align: center;">
                    <span style="font-size: 18px;">GOVERNO FEDERAL DO BRASIL</span>
                    <div style="font-size: 18px;">MINISTÉRIO DA EDUCAÇÃO</div>
                    <div style="font-size: 18px; font-weight: bold;">INSTITUTO FEDERAL</div>
                    <div style="font-size: 18px; font-weight: bold;">PARANAGUÁ</div>
                </td>
                <td style="width: 75px; text-align: right;">
                    <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/assets/img/logo_ifpr.png'))) }}" width="90" height="90" style="border-radius: 25%;">
                </td>
            </tr>
        </tbody>
    </table>
    <div style="width: 100%; text-align: center; margin-top: 7px;">
        <span style="font-size: 18px; font-weight: bold; font-style: italic;"></span>
    </div>
    <hr>

    <div class="texto-restrito-baixo" style="position: absolute; bottom: 1px;"> DOCUMENTO GERADO PELO SISTEMA AULA </div>

    <div class="identification-header">IDENTIFICAÇÃO</div>
    @foreach($alunos as $aluno)
        <table class="info-table identification-section">
            <tbody>
                <tr>
                    <td class="photo-cell" >
                        @if($aluno->foto)
                            <img src="{{ public_path('storage/' . $aluno->foto) }}" style="width: 120px; height: auto;">
                        @else
                            FOTO
                        @endif
                    </td>
                    <td>
                        <table class="inner-table">
                            <tr><td class="label table-label">NOME:</td><td style="width: 305px;">{{ $aluno->nome }}</td></tr>
                            <tr><td class="label">CURSO:</td><td>{{ $aluno->curso->nome }}</td></tr>
                            <tr><td class="label">ANO:</td><td>{{ $aluno->ano }}</td></tr>
                            <tr><td class="label">NATURALIDADE:</td><td>  </td></tr>
                            <tr><td class="label">MÃE:</td><td>  </td></tr>
                            <tr><td class="label">PAI:</td><td>  </td></tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    @endforeach

</body>
</html>