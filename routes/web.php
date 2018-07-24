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

});

$this->get('/','Portal\PortalController@index')->name('home');

Auth::routes();


