<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Turma;

class PainelController extends Controller
{
    public function index()
    {
        return view('painel.home.index');
    }

    public function horario()
    {
        //$turmas = Turma::get()->toArray();
        $turmas =  Turma::pluck('tur_nome','id_turma');
        return view('painel.horario.teste',compact('turmas'));
    }

    public function montarhorario(Request $request )
    {
        $materias = Turma::find($request->id_turma)->disciplinas()->get();
        $materias->pluck('disc_nome','id_disciplina');
        $turmas =  Turma::pluck('tur_nome','id_turma');


        return view('painel.horario.index',compact('turmas','materias'));
    }
}
