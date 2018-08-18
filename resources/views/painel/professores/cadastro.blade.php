@extends('adminlte::page')

@section('title', 'Novo professor')

@section('content_header')
    <h1>Cadastrar Professor</h1>
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
                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
        
        
            @endforeach
    @endif

    <div class="box">
        <div class="box-header">
            <h3>Cadastre um novo professor</h3>
        </div>
        <div class="box-body">
        <form action="{{ route('professor.store') }}" method="POST">
            {!! csrf_field() !!}
                <div class="form-group">
                    <input type="text" name='prof_nome' placeholder="Nome do professor" class="form-control">
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
            </form>
        </div>
    </div>
@stop