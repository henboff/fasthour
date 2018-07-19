<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 19 Jul 2018 14:33:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ProfMateria
 * 
 * @property int $id_profmat
 * @property int $id_professor
 * @property int $id_materia
 * 
 * @property \App\Models\Materia $materia
 * @property \App\Models\Professor $professor
 * @property \Illuminate\Database\Eloquent\Collection $aulas
 *
 * @package App\Models
 */
class ProfMateria extends Eloquent
{
	protected $table = 'ProfMateria'; //nome da tabela que esse model representa
	protected $primaryKey = 'id_profmat';
	public $timestamps = false;

	protected $casts = [
		'id_professor' => 'int',
		'id_materia' => 'int'
	];

	protected $fillable = [
		'id_professor',
		'id_materia'
	];

	public function materia()
	{
		return $this->belongsTo(\App\Models\Materia::class, 'id_materia');
	}

	public function professor()
	{
		return $this->belongsTo(\App\Models\Professor::class, 'id_professor');
	}

	public function aulas()
	{
		return $this->hasMany(\App\Models\Aula::class, 'id_profmat');
	}
}
