@extends('adminlte::page')

@section('title', 'Disciplinas')



@section('content_header')
    <h1>
        {{ $module_name }}
        <a href="{{route($route_path.'.create')}}" class="btn btn-primary pull-right"><i class='fa fa-plus-circle'></i> Adicionar {{ $module_name }}</a>
    </h1> 
@stop

@section('content')
    <!-- Content Header (Page header) -->
    <div class="container-fluid spark-screen">
    <section class="content-header">
               
    </section>
 
    <section class="content">
 
        <div class="row">
            <form action="{{route($route_path.'.index')}}" method='GET' class="" id="frmSearchUser" enctype="multipart/form-data">
                <div class="col-xs-12">                
                    <div class="box">
 
                        <div class="box-header with-border">
                            <h3 class="box-title">Pesquisar por {{ $module_name }}s</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
 
                        <div class="box-body">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input type="text" name="user_search" id="search" class="form-control" value="{{Request::get('user_search')}}" placeholder="Pesquisar" />
                                </div>
                            </div>
                        </div>
 
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>&nbsp;</label>
                                    <button type="submit" name='search' value='search' class="btn btn-sm btn-info"><i class="fa fa-search"></i> Pesquisar</button>
                                    <a href="{{ route($route_path.'.index') }}"><button type="button" class="btn btn-sm btn-default"><i class="fa fa-search-minus"></i> Limpar</button></a>
 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                
                    <!-- /.box-header -->
                    @if(count($items) > 0)
                    <div class="box-body table-responsive no-padding">
                       <table class="table table-bordered">
                            <tr>
                                <!-- Nome da disciplina -->
                                <th>Disciplina</th>
                            </tr>
                        @foreach ($items as $key => $item)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <!-- Tuplas do banco de dados -->
                            <td>{{ $item->disc_nome }}</td>
                            <td>
                                <a class="btn btn-primary btn-xs" href="{{ route($route_path.'.edit',$item->id_disciplina) }}"><i class="fa fa-edit"></i> Editar</a>
                                <button type="button" data-toggle="modal" data-target="#confirmDeleteModal-{{ $item->id_disciplina }}" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Apagar</button>
                                <!-- Modal (Confirm Delete) -->
                                <div class="modal fade" id="confirmDeleteModal-{{ $item->id_disciplina }}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                                            </div>
                                            <div class="modal-body">
                                                Você tem certeza que deseja excluir a {{$module_name}} &lsquo;{{ $item->disc_nome}}&rsquo;?
                                            </div>
                                            <div class="modal-footer">
                                                <form method="POST" action="{{ route($route_path.'.destroy',$item->id_disciplina) }}">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                    <input type="submit" name="submit" value="Delete" class='btn btn-danger'>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    @else
                    <div class="box-body table-responsive no-padding text-center">
                        <br />
                        <b>Sem registros por enquanto.</b><br /><br />                        
                    </div>
                    @endif
 
                    {!! $items->appends(Request::all())->render() !!}
                    
                    <!-- /.box-body -->
                
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>
@stop