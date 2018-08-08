@extends('adminlte::page')

@section('title', 'Professores')

@section('content_header')
    <h1>Professores</h1>
    <br><br>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
             
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif    
    
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            
        </div>

        <div class="box-body">
            <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ $countprof }}</h3>
    
                  <p>Professores cadastrados</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('professor.cadastro') }}" class="small-box-footer">Novo professor <i class="fa fa-arrow-circle-right"></i></a>
              </div>

        <div>
                <h1>Listagem dos professores:</h1>
                <br>
                <div class="row">
                    @forelse ($professores as $prof)
                        <div class="col-lg-4">
                          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                          <h2>Professor {{ $prof->prof_nome }}</h2>
                          <p><a href="professores/{{$prof->id_professor}}/editar" class="btn btn-warning">Editar &raquo;</a>
                            &nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm">Excluir <i class="fa fa-trash" aria-hidden="true"></i></button></p>
                            <br>
                        </div><!-- /.col-lg-4 -->
                    @empty
                        <p>Não há professores cadastrados.</p>
                    @endforelse
                </div><!-- /.row -->
            
                <div class="modal fade" id="confirm" role="dialog">
                    <div class="modal-dialog modal-md">
                  
                      <div class="modal-content">
                        <div class="modal-body">
                              <p> Você deseja realmente excluir este professor?</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#" type="button" class="btn btn-danger" id="delete">Excluir Professor</a>
                              <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                
        </div>
        
    </div>
@stop