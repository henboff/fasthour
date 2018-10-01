<?php

namespace App\Http\Controllers\Painel;

use App\Models\Materia;
use App\Models\Disciplina;
use App\Models\Turma;
use App\Models\Professor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_turm)
    {
        $turma = Turma::find($id_turm);
        dd($materias = Turma::find($id_turm)->disciplinas()->get());
        //$materias->pluck('disc_nome','id_disciplina');
        $disciplinas =  Disciplina::pluck('disc_nome','id_disciplina');
        //$disciplinas = $materia->values('id_disciplina','disc_nome');
        $disciplinas->all();
        
        $professores =  Professor::pluck('prof_nome','id_professor');
        $professores->all();
        return view('painel.turmas.materias.index', compact('turma','disciplinas','materias','professores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_turm)
    {
        $turma = Turma::find($id_turm);
        $turma->disciplinas()->attach($request->id_disciplina,['id_professor' => $request->id_professor]);
        
        return redirect()
                      ->route('materia.index',$turma)
                      ->with('success', 'Matéria adicionada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
