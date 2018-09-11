@extends('adminlte::page')

@section('title', 'Matérias da turma')



@section('content_header')
    <h1>
        {{ $turma->id_turma }}: {{ $turma->tur_nome }}
    </h1>
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

    <!-- Content Header (Page header) --> 
    <div class="container-fluid spark-screen">
        <section class="content">
            <div class="row">
                {{ Form::open(array('route' => array('materia.store', $turma->id_turma), 'method' => 'post')) }}
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                            <h3 class="box-title">Adicionar Matéria</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('id_disciplina', 'Disciplina', array('class' => 'control-label') )}}
                                        {{ Form::select('id_disciplina', $disciplinas, null, array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                    {{ Form::submit('Adicionar Matéria', array('class' => 'btn btn-primary btn-sm')) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
            <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @if(count($materias) > 0)
                        <div class="table table-bordered">
                            <table class="table table-condensed table-hover">
                                <thead>
                                <tr>
                                    <th>Matérias {{--$turma->tur_nome--}}</th>
                                </tr>
                                </thead>

                            <tbody>
                                @foreach($materias as $key => $materia)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $materia->disc_nome }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    @else
                        <div class="box-body table-responsive no-padding text-center">
                        <br/>
                        <b>Sem registros por enquanto.</b><br /><br />                        
                    </div>
                    @endif
                </div>
            </div>
            </div>
        </section>
    </div>

@stop