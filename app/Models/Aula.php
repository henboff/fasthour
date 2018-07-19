<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 19 Jul 2018 14:33:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Aula
 * 
 * @property int $id_aula
 * @property int $aula_dia
 * @property \Carbon\Carbon $aula_data
 * @property int $id_periodo
 * @property int $id_profmat
 * @property int $id_horario
 * 
 * @property \App\Models\Horario $horario
 * @property \App\Models\PeriodosAula $periodos_aula
 * @property \App\Models\ProfMaterium $prof_materium
 *
 * @package App\Models
 */
class Aula extends Eloquent
{
	protected $primaryKey = 'id_aula';
	public $timestamps = false;

	protected $casts = [
		'aula_dia' => 'int',
		'id_periodo' => 'int',
		'id_profmat' => 'int',
		'id_horario' => 'int'
	];

	protected $dates = [
		'aula_data'
	];

	protected $fillable = [
		'aula_dia',
		'aula_data',
		'id_periodo',
		'id_profmat',
		'id_horario'
	];

	public function horario()
	{
		return $this->belongsTo(\App\Models\Horario::class, 'id_horario');
	}

	public function periodos_aula()
	{
		return $this->belongsTo(\App\Models\PeriodosAula::class, 'id_periodo');
	}

	public function prof_materia()
	{
		return $this->belongsTo(\App\Models\ProfMateria::class, 'id_profmat');
	}
}
