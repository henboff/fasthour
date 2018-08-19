<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Turma;
use App\Http\Requests\TurmaRequest;

use View;
use Auth;

class TurmaController extends Controller
{
    protected $module_name = "Turma";
    protected $model = "";
    protected $route_path = "turmas";
	protected $view_path = "painel.turmas";
	public function __construct(){
		// parent::__construct();
		$this->module_name = "Turma";
		$this->model = new Turma;
        View::share('module_name',$this->module_name);
		View::share('route_path',$this->route_path);
    }

    public function index(Request $request)
    {
        $where = array();
        $search = $request->all();
        if( $request->has('search') ){
            $search = $request->get('user_search');
            $where[] = [
                'field' => 'tur_nome',
                'value' => '%'.$search.'%',
                'operation' => 'LIKE',
            ];
        }
        $items = $this->model->getAll($where);
        
        return view($this->view_path.'.index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * env('PER_PAGE'));
    }
 
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->view_path.'.create');
    }
 
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TurmaRequest $request)
    {
        $this->validate($request, [
            'tur_nome' => 'required',
        ]);
        $inder_data = $request->except(['_token','submit']);
        $inder_data['user_id'] = Auth::user()->id; 
        $this->model->create($inder_data);
        return redirect()->route($this->route_path.'.index')
                        ->with('success',$this->module_name.' criada com sucesso');
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = $this->model->find($id);
        return view($this->view_path.'.edit',compact('item'));
    }
 
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TurmaRequest $request, $id)
    {
        $this->validate($request, [
            'tur_nome' => 'required',
        ]);
        
        $inder_data = $request->except(['_token','_method','submit']);
        $inder_data['user_id'] = Auth::user()->id;
        $this->model->find($id)->update($inder_data);
        return redirect()->route($this->route_path.'.index')
                        ->with('success',$this->module_name.' atualizada com sucesso');
    }
 
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->find($id)->delete();
        return redirect()->route($this->route_path.'.index')
                        ->with('success',$this->module_name.' apagada com sucesso');
    }

}
