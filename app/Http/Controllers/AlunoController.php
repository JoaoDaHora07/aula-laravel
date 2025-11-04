<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Models\Curso;
use Barryvdh\DomPDF\Facade\Pdf;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::all();
        //dd($alunos);
        return view('aluno.index', compact('alunos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::all();
        return view("aluno.create",compact('cursos'));

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $curso = Curso::find($request->curso);
        if(isset($curso)){
            $aluno = new Aluno();
            $aluno->nome = mb_strtoupper($request->nome, 'UTF-8');
            $aluno->ano = $request->ano;
            $aluno->curso()->associate($curso);
            $aluno->save();
        
            if($request->hasFile('foto')) {
            // Upload File
            $extensao_arq = $request->file('foto')->getClientOriginalExtension();
            $name = $aluno->id.'_'.time().'.'.$extensao_arq;
            $request->file('foto')->storeAs('fotos', $name, ['disk' => 'public']);
            $aluno->foto = 'fotos/'.$name;
            $aluno->save();

            }
        


        }

        return redirect()->route('aluno.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::find($id);


        if(isset($aluno)){
            return view('aluno.edit',compact('aluno'));

        }

        return redirect()->route('aluno.index');
        
    
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aluno = Aluno::find($id);

        $aluno->nome = $request->nome;
        $aluno->curso = $request->curso;
        $aluno->ano = $request->ano;


        $aluno->save(); 



        


        return redirect()->route('aluno.index');

        


        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        $aluno = Aluno::find($id);
        
        $aluno->delete();

        


        return redirect()->route('aluno.index');
        //
    }

    public function report() {
        $alunos = Aluno::with(['curso'])->get();
        // Gera um PDF a partir de uma view Blade
        $pdf = Pdf::loadView('aluno.report', ['alunos' => $alunos]);
        // Exibe o PDF no navegador
        return $pdf->stream('document.pdf');
        // Ou Faz o download do PDF
        // return $pdf->download('document.pdf');
}
}
