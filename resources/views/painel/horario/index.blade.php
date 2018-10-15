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

	<div class="row" id="redips-drag">
		<div class="col-6 col-md-4">
		@if (isset($materias))
    		<table id="table1">
					<tbody>
						@foreach($materias as $key => $materia)
							<tr><td class="dark"><div id="ar" class="redips-drag redips-clone ar">{{ $materia->disc_nome }}</div><input id="b_ar" class="ar" type="button" value="" onclick="redips.report('ar')" title="Show only {{ $materia->disc_nome }}"/></td></tr>
                    	@endforeach
						<tr><td class="redips-trash" title="Trash">Lixeira</td></tr>

					</tbody>
				</table>
		@else
    		<h2>Selecione uma turma primeiro.</h2>
		@endif
			<!--<table id="table1">
					<tbody>
						<tr><td class="dark"><div id="ar" class="redips-drag redips-clone ar">Empreendedorismo<br>Juliano</div><input id="b_ar" class="ar" type="button" value="" onclick="redips.report('ar')" title="Show only Arts"/></td></tr>
						<tr><td class="dark"><div id="bi" class="redips-drag redips-clone bi">Banco de Dados<br>Kaiser</div><input id="b_bi" class="bi" type="button" value="" onclick="redips.report('bi')" title="Show only Biology"/></td></tr>
						<tr><td class="dark"><div id="ch" class="redips-drag redips-clone ch">Des. Sistemas<br>Luiz</div><input id="b_ch" class="ch" type="button" value="" onclick="redips.report('ch')" title="Show only Chemistry"/></td></tr>
						<tr><td class="dark"><div id="en" class="redips-drag redips-clone en">Inglês<br>Ingrid</div><input id="b_en" class="en" type="button" value="" onclick="redips.report('en')" title="Show only English"/></td></tr>
						<tr><td class="dark"><div id="et" class="redips-drag redips-clone et">Filosofia<br>Clodoaldo</div><input id="b_et" class="et" type="button" value="" onclick="redips.report('et')" title="Show only Ethics"/></td></tr>
						<tr><td class="dark"><div id="hi" class="redips-drag redips-clone hi">História<br>Gilson</div><input id="b_hi" class="hi" type="button" value="" onclick="redips.report('hi')" title="Show only History"/></td></tr>
						<tr><td class="dark"><div id="it" class="redips-drag redips-clone it">Quimíca<br>Joelson</div><input id="b_it" class="it" type="button" value="" onclick="redips.report('it')" title="Show only IT"/></td></tr>
						<tr><td class="dark"><div id="ma" class="redips-drag redips-clone ma">Matemática<br>Samanta</div><input id="b_ma" class="ma" type="button" value="" onclick="redips.report('ma')" title="Show only Mathematics"/></td></tr>
						<tr><td class="dark"><div id="ph" class="redips-drag redips-clone ph">Física<br>Juliano de Deus</div><input id="b_ph" class="ph" type="button" value="" onclick="redips.report('ph')" title="Show only Physics"/></td></tr>
						<tr><td class="redips-trash" title="Trash">Lixeira</td></tr>
					</tbody>
				</table>-->
		</div>
		<div class="col-12 col-md-8">
					<table id="table2">
						<colgroup>
							<col width="50"/>
							<col width="100"/>
							<col width="100"/>
							<col width="100"/>
							<col width="100"/>
							<col width="100"/>
						</colgroup>
						<tbody>
							<tr>
								<!-- if checkbox is checked, clone school subjects to the whole table row  -->
								<td class="redips-mark blank">
									<input id="week" type="checkbox" title="Apply school subjects to the week" checked/>
									<input id="report" type="checkbox" title="Show subject report"/>
								</td>
								<td class="redips-mark dark">Segunda</td>
								<td class="redips-mark dark">Terça</td>
								<td class="redips-mark dark">Quarta</td>
								<td class="redips-mark dark">Thursday</td>
								<td class="redips-mark dark">Friday</td>

							</tr>
							<tr>
								<td class="redips-mark dark">7:30</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">8:20</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">09:10</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">10:20</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">11:10</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">12:00</td>
								<td class="redips-mark lunch" colspan="5">Rango</td>
							</tr>
							<tr>
								<td class="redips-mark dark">13:30</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">14:20</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">15:10</td>
								<td class="redips-mark lunch" colspan="5">Rango</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">15:30</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td class="redips-mark dark">16:20</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
		</div>
	</div>
    <!--Montar horário escolar-->

@stop

@section('js')
	<script src="{{ asset('js/horario/redips-drag-min.js') }}"></script>
	<script src="{{ asset('js/horario/script.js') }}"></script>
@stop
