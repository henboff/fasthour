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
//Define um grupo de rotas que devem ser autenticadas com o namespace Admin
$this->group(['middleware' => ['auth'], 'namespace' => 'Painel'],function(){
    $this->get('painel','PainelController@index')->name('painel.home');

});

$this->get('/','Portal\PortalController@index')->name('home');

Auth::routes();


