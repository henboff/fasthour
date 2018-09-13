@extends('adminlte::page')

@section('title', 'Montar horário escolar')

@section('content_header')
    <h1>Monte seu horário escolar</h1>
@stop

@section('css')
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
	<link rel="stylesheet" href="{{ asset('css/horario/style.css') }}">
@stop

@section('content')

	{{ Form::open(array('route' => 'horario.turma', 'method' => 'post')) }}
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                            <h3 class="box-title">Selecione uma turma</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                </div>
                            </div>

                            <div class="box-body">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('id_turma', 'Turma', array('class' => 'control-label') )}}
                                        {{ Form::select('id_turma', $turmas, null, array('class' => 'form-control')) }}
                                    </div>
                                    <div class="form-group">
                                    {{ Form::submit('Selecionar Turma', array('class' => 'btn btn-primary btn-sm')) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }} 
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-4">
			<table class="table">
					<tbody>	
							<tr><td><div>Matemática</div></td></tr>
							<tr><td><div>Matemática</div></td></tr>
							<tr><td><div>Matemática</div></td></tr>
							<tr><td><div>Matemática</div></td></tr>
							<tr><td><div>Matemática</div></td></tr>
							<tr><td class="redips-trash" title="Trash">Lixeira</td></tr>
						
					</tbody>
			</table>
			</div>

			<div class="col-8">
			<table class="table">
		<thead>
    		<tr>
				<th scope="col">Horário</th>
				<th scope="col">Segunda</th>
				<th scope="col">Terça</th>
				<th scope="col">Quarta</th>
				<th scope="col">Quinta</th>
				<th scope="col">Sexta</th>
    		</tr>
		</thead>
		<tbody>
            <tr>
                <th scope="row">7:30 <br> 8:20</th>
                <td></td> 
                <td></td> 
                <td></td> 
    		</tr>
            <tr>
                <th scope="row">8:20</th>
                <td></td> 
                <td></td> 
                <td></td> 
    		</tr>
            <tr>
                <th scope="row">9:10</th>
                <td></td> 
                <td></td> 
                <td></td> 
    		</tr>
            <tr>
                <th scope="row">9:10</th>
                <td></td> 
                <td></td> 
                <td></td> 
    		</tr>
            <tr>
                <th scope="row">9:10</th>
                <td></td> 
                <td></td> 
                <td></td> 
    		</tr>
            <tr>
                <th scope="row">9:10</th>
                <td></td> 
                <td></td> 
                <td></td> 
    		</tr>
            <tr>
                <th scope="row">9:10</th>
                <td></td> 
                <td></td> 
                <td></td> 
    		</tr>
            <tr>
                <th scope="row">9:10</th>
                <td></td> 
                <td></td> 
                <td></td> 
    		</tr>
            <tr>
                <th scope="row">9:10</th>
                <td></td> 
                <td></td> 
                <td></td> 
    		</tr>
            <tr>
                <th scope="row">9:10</th>
                <td></td> 
                <td></td> 
                <td></td> 
    		</tr>
		</tbody>
	</table>
			</div>
		</div>

    		


	
	</div>

@stop

@section('js')
	<script src="{{ asset('js/horario/redips-drag-min.js') }}"></script>
	<script src="{{ asset('js/horario/script.js') }}"></script>
@stop