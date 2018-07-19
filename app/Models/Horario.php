<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 19 Jul 2018 14:33:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Horario
 * 
 * @property int $id_horario
 * @property \Carbon\Carbon $dt_ini
 * @property \Carbon\Carbon $dt_final
 * @property int $id_bimestre
 * 
 * @property \App\Models\Bimestre $bimestre
 * @property \Illuminate\Database\Eloquent\Collection $aulas
 *
 * @package App\Models
 */
class Horario extends Eloquent
{
	protected $primaryKey = 'id_horario';
	public $timestamps = false;

	protected $casts = [
		'id_bimestre' => 'int'
	];

	protected $dates = [
		'dt_ini',
		'dt_final'
	];

	protected $fillable = [
		'dt_ini',
		'dt_final',
		'id_bimestre'
	];

	public function bimestre()
	{
		return $this->belongsTo(\App\Models\Bimestre::class, 'id_bimestre');
	}

	public function aulas()
	{
		return $this->hasMany(\App\Models\Aula::class, 'id_horario');
	}
}
