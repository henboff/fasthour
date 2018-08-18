@extends('adminlte::page')

@section('title', 'Editar disciplinas')



@section('content_header')
    <h1>{{ $module_name }}</h1>
@stop

@section('content')
<!-- Content Header (Page header) -->
<div class="container-fluid spark-screen">
        <section class="content-header">
            <h2>
                Editar as {{ $module_name }}
            </h2>
        </section>
     
        <!-- Main content -->
        <section class="content">
     
            <!-- SELECT2 EXAMPLE -->
            <form action="<?php print route($route_path.'.update',$item->id_disciplina); ?>" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="PATCH">
     
                @if($errors->any())
                    <div class="alert alert-danger">
                        <p><strong>Opps algo está errado.</strong></p>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
     
                <div class="box box-default">                                   
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ $module_name }}</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nome da disciplina*</label>
                                    <input type="text" class="form-control" id="name" name="disc_nome" value="{{ Input::old('name') ? old('name') : $item->disc_nome }}" placeholder="Digite um novo nome para a disciplina">
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
     
                    </div>
                    <!-- /.box-body -->
     
                    <div class="box-footer">
                        <button type="submit" name="submit" value="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Salvar</button>
                        <a href="{{ route($route_path.'.index') }}"><button type="button" class="btn btn-sm btn-default"><i class="fa fa-arrow-circle-left"></i> Cancelar</button></a>
                    </div>
     
                </div>
            </form>
            <!-- /.box -->
     
     
            <!-- /.row -->
     
        </section>
    </div>
    
@stop