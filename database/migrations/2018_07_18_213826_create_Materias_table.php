<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMateriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Materias', function(Blueprint $table)
		{
			$table->integer('id_materia', true);
			$table->integer('id_turma')->nullable()->index('FK_Materias_Turmas');
			$table->integer('id_disciplina')->nullable()->index('FK_Materias_Disciplinas');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Materias');
	}

}
