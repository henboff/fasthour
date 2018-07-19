<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 19 Jul 2018 14:33:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Bimestre
 * 
 * @property int $id_bimestre
 * @property \Carbon\Carbon $bim_ano
 * @property string $bim_nome
 * 
 * @property \Illuminate\Database\Eloquent\Collection $horarios
 *
 * @package App\Models
 */
class Bimestre extends Eloquent
{
	protected $primaryKey = 'id_bimestre';
	public $timestamps = false;

	protected $dates = [
		'bim_ano'
	];

	protected $fillable = [
		'bim_ano',
		'bim_nome'
	];

	public function horarios()
	{
		return $this->hasMany(\App\Models\Horario::class, 'id_bimestre');
	}
}
