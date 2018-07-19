<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 19 Jul 2018 14:33:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Materia
 * 
 * @property int $id_materia
 * @property int $id_turma
 * @property int $id_disciplina
 * 
 * @property \App\Models\Disciplina $disciplina
 * @property \App\Models\Turma $turma
 * @property \Illuminate\Database\Eloquent\Collection $prof_materia
 *
 * @package App\Models
 */
class Materia extends Eloquent
{
	protected $primaryKey = 'id_materia';
	public $timestamps = false;

	protected $casts = [
		'id_turma' => 'int',
		'id_disciplina' => 'int'
	];

	protected $fillable = [
		'id_turma',
		'id_disciplina'
	];

	public function disciplina()
	{
		return $this->belongsTo(\App\Models\Disciplina::class, 'id_disciplina');
	}

	public function turma()
	{
		return $this->belongsTo(\App\Models\Turma::class, 'id_turma');
	}

	public function prof_materia()
	{
		return $this->hasMany(\App\Models\ProfMateria::class, 'id_materia');
	}
}
