<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 19 Jul 2018 14:33:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Turno
 * 
 * @property int $id_turno
 * @property string $turno_nome
 * 
 * @property \Illuminate\Database\Eloquent\Collection $periodos__aulas
 *
 * @package App\Models
 */
class Turno extends Eloquent
{
	protected $primaryKey = 'id_turno';
	public $timestamps = false;

	protected $fillable = [
		'turno_nome'
	];

	public function periodos__aulas()
	{
		return $this->hasMany(\App\Models\PeriodosAula::class, 'id_turno');
	}
}
