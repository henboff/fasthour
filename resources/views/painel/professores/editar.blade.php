@extends('adminlte::page')

@section('title', 'Novo professor')

@section('content_header')
    <h1>Editar Professor</h1>
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

    @if ($errors->any())
        <ul class="list-group"></ul>
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-warning">{{ $error }}</li>
                
                
            @endforeach
    @endif
    
    <div class="box">
        <div class="box-header">
            <h3>Editar dados do Professor {{ $prof->prof_nome }}</h3>
        </div>
        <div class="box-body">
        <form action="{{ route('professor.atualizar', $prof) }}" method="POST">
            {!! csrf_field() !!}
            {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" name='prof_nome' placeholder="Nome do professor" value="{{ $prof->prof_nome }}" class="form-control">
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-success">Editar</button>
                    </div>
            </form>
        </div>
    </div>
@stop