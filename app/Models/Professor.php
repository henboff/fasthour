<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 19 Jul 2018 14:33:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Professor
 * 
 * @property int $id_professor
 * @property string $prof_nome
 * @property string $prof_disp
 * 
 * @property \Illuminate\Database\Eloquent\Collection $prof_materia
 *
 * @package App\Models
 */
class Professor extends Eloquent
{
	protected $table = 'Professores'; //nome da tabela que esse model representa
	protected $primaryKey = 'id_professor';
	public $timestamps = false;

	protected $fillable = [
		'prof_nome',
		'prof_disp'
	];

	public function prof_materia()
	{
		return $this->hasMany(\App\Models\ProfMateria::class, 'id_professor');
	}
}
