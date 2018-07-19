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
	protected $primaryKey = 'id_turma';
	public $timestamps = false;

	protected $fillable = [
		'tur_nome'
	];

	public function materias()
	{
		return $this->hasMany(\App\Models\Materia::class, 'id_turma');
	}
}
