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



    
    {{ Form::open(array('route' => array('materia.store', $turma->id_turma), 'method' => 'post')) }}

    <div class="form-group">
        {{ Form::label('id_disciplina', 'Disciplina', array('class' => 'control-label') )}}
        {{ Form::select('id_disciplina', $disciplinas, null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::submit('Adicionar Matéria', array('class' => 'btn btn-primary btn-sm')) }}
    </div>

    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
        @foreach($materias as $materia)
            <tr>
                <td>{{ $materia->disc_nome }}</td>
                {{--<td>
                    <a class="btn btn-primary btn-xs" href="{{ route($route_path.'.edit',$item->id_turma) }}"><i class="fa fa-edit"></i> Editar</a>
                    <button type="button" data-toggle="modal" data-target="#confirmDeleteModal-{{ $item->id_turma }}" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Apagar</button>
                    <!-- Modal (Confirm Delete) -->
                    <div class="modal fade" id="confirmDeleteModal-{{ $item->id_turma }}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirmação de Exclusão</h4>
                                </div>

                                <div class="modal-body">
                                                Você tem certeza que deseja excluir a {{$module_name}} &lsquo;{{ $item->tur_nome}}&rsquo;?
                                </div>

                                <div class="modal-footer">
                                    <form method="POST" action="{{ route($route_path.'.destroy',$item->id_turma) }}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                        <input type="submit" name="submit" value="Delete" class='btn btn-danger'>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
    
    {{ Form::close() }}

@stop