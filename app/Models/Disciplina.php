<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 19 Jul 2018 14:33:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Disciplina
 * 
 * @property string $disc_nome
 * @property string $disc_disp
 * @property int $id_disciplina
 * 
 * @property \Illuminate\Database\Eloquent\Collection $materias
 *
 * @package App\Models
 */
class Disciplina extends Eloquent
{
	protected $table = "Disciplinas";
	protected $primaryKey = 'id_disciplina';
	public $timestamps = false;

	protected $fillable = [
		'disc_nome',
		'disc_disp'
	];

	public function turma()
	{
		return $this->belongsToMany(\App\Models\Turma::class, 'Materias','id_disciplina','id_turma')->withPivot(['id_professor']);
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
