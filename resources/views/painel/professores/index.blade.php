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
            
        </div>
        <div>
         <!-- Three columns of text below the carousel -->
         <div class="row">
                <div class="col-lg-4">
                  <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
                  <h2>Heading</h2>
                  <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                  <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
                <h1>Listagem dos professores:</h1>
                
                @forelse ($professores as $prof)
                    <p>{{ $prof->prof_nome }} </p> <button class="btn btn-sm">Editar</button>  <button class="btn btn-sm">Excluir</button> 
                @empty
                    <p>Não há professores cadastrados.</p>
                @endforelse
                
        </div>
        
    </div>
@stop