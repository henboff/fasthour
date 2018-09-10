<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Define um grupo de rotas que devem ser autenticadas com o namespace Painel
$this->group(['middleware' => ['auth'], 'namespace' => 'Painel', 'prefix' => 'painel'],function(){
    $this->get('/','PainelController@index')->name('painel.home');
    $this->get('professores','ProfessorController@index')->name('professor.home');
    $this->get('professores/cadastro','ProfessorController@cadastro')->name('professor.cadastro');
    $this->get('professores/{prof}/editar','ProfessorController@editar')->name('professor.editar');
    $this->post('professores/store','ProfessorController@cadastroStore')->name('professor.store');
    $this->patch('professores/{prof}','ProfessorController@atualizar')->name('professor.atualizar');
    $this->delete('professores/{prof}','ProfessorController@deletar')->name('professor.deletar');
    Route::resource('disciplinas','DisciplinaController');
    Route::resource('turmas','TurmaController');
    $this->get('turmas/{turma}/materias','MateriaController@index')->name('materia.index');
    $this->post('turmas/{turma}/materias/store','MateriaController@store')->name('materia.store');

});

$this->get('/','Portal\PortalController@index')->name('home');
$this->post('distur/{turma}/disciplina','Painel\TurmaController@adddisciplina')->name('turma.add.disc');
$this->get('distur/{turma}','Painel\TurmaController@showdisc')->name('turma.showdisc');

Auth::routes();


