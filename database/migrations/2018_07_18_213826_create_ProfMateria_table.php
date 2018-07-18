<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfMateriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ProfMateria', function(Blueprint $table)
		{
			$table->integer('id_profmat', true);
			$table->integer('id_professor')->nullable()->index('FK_ProfMateria_Professores');
			$table->integer('id_materia')->nullable()->index('FK_ProfMateria_Materias');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ProfMateria');
	}

}
