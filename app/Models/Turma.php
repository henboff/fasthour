<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 19 Jul 2018 14:33:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Turma
 * 
 * @property int $id_turma
 * @property string $tur_nome
 * 
 * @property \Illuminate\Database\Eloquent\Collection $materias
 *
 * @package App\Models
 */
class Turma extends Eloquent
{
	protected $table = "Turmas";
	protected $primaryKey = 'id_turma';
	public $timestamps = false;

	protected $fillable = [
		'tur_nome'
	];

	public function disciplinas()
	{
		return $this->belongsToMany(\App\Models\Disciplina::class, 'Materias','id_turma','id_disciplina');
	}

	public function getAll( $filters = array() )
	{
    	$users = $this->select('*');
		foreach( $filters as $key => $value )
		{
    		$users->where( $value['field'], $value['operation'], $value['value'] );
    	}
    	return $users->paginate(10);
    }
}
