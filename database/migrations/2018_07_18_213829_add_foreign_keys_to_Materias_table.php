<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMateriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Materias', function(Blueprint $table)
		{
			$table->foreign('id_disciplina', 'FK_Materias_Disciplinas')->references('id_disciplina')->on('Disciplinas')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_turma', 'FK_Materias_Turmas')->references('id_turma')->on('Turmas')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Materias', function(Blueprint $table)
		{
			$table->dropForeign('FK_Materias_Disciplinas');
			$table->dropForeign('FK_Materias_Turmas');
		});
	}

}
