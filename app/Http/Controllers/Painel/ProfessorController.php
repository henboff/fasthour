<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfessorRequest;
use DB;

use App\Models\Professor;


class ProfessorController extends Controller
{
    public function index()
    {
        $countprof = DB::table('Professores')->count();
        dd($professores = Professor::get());
        return view('painel.professores.index', compact('countprof','professores'));
    }

    public function cadastro() 
    {
        return view('painel.professores.cadastro');
    }

    //esta função insere os dados na tabela professor usando a Model Professor
    public function cadastroStore(ProfessorRequest $request, Professor $professor) 
    {
        // Insere um novo professor, de acordo com os dados informados pelo usuário
        $insert = $professor->create($request->all());
 
        // Verifica se inseriu com sucesso
        // Redireciona para a listagem dos professores
        // Passa uma session flash success (sessão temporária)
        if ($insert)
         return redirect()
                      ->route('professor.home')
                      ->with('success', 'Professor cadastrado com sucesso!');
 
        // Redireciona de volta com uma mensagem de erro
        return redirect()
                  ->back()
                  ->with('error', 'Falha ao cadastrar, você inseriu algum dado incorreto.');
        
    }

    public function editar($id)
    {
        $prof = Professor::findOrFail($id);
        return view('painel.professores.editar', compact('prof'));
    }

    public function atualizar($id, ProfessorRequest $request)
    {
        $prof = Professor::findOrFail($id);
        $insert = $prof->update($request->all());
        if ($insert)
         return redirect()
                      ->route('professor.home')
                      ->with('success', 'Professor editado com sucesso!');
 
        // Redireciona de volta com uma mensagem de erro
        return redirect()
                  ->back()
                  ->with('error', 'Falha ao editar, você inseriu algum dado incorreto.');
        
    }
    public function deletar($id)
    {
        $prof = Professor::findOrFail($id);
        $prof->delete();
        return redirect()
                    ->route('professor.home')
                    ->with('success', 'Professor excluido com sucesso!');
                      
    }
}
