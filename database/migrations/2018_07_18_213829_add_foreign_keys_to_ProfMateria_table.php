<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfMateriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ProfMateria', function(Blueprint $table)
		{
			$table->foreign('id_materia', 'FK_ProfMateria_Materias')->references('id_materia')->on('Materias')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_professor', 'FK_ProfMateria_Professores')->references('id_professor')->on('Professores')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ProfMateria', function(Blueprint $table)
		{
			$table->dropForeign('FK_ProfMateria_Materias');
			$table->dropForeign('FK_ProfMateria_Professores');
		});
	}

}
