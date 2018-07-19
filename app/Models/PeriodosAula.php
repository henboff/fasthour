<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 19 Jul 2018 14:33:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class PeriodosAula
 * 
 * @property int $id_periodo
 * @property \Carbon\Carbon $hr_ini
 * @property \Carbon\Carbon $hr_fim
 * @property int $id_turno
 * 
 * @property \App\Models\Turno $turno
 * @property \Illuminate\Database\Eloquent\Collection $aulas
 *
 * @package App\Models
 */
class PeriodosAula extends Eloquent
{
	protected $table = 'Periodos_Aula';
	protected $primaryKey = 'id_periodo';
	public $timestamps = false;

	protected $casts = [
		'id_turno' => 'int'
	];

	protected $dates = [
		'hr_ini',
		'hr_fim'
	];

	protected $fillable = [
		'hr_ini',
		'hr_fim',
		'id_turno'
	];

	public function turno()
	{
		return $this->belongsTo(\App\Models\Turno::class, 'id_turno');
	}

	public function aulas()
	{
		return $this->hasMany(\App\Models\Aula::class, 'id_periodo');
	}
}
