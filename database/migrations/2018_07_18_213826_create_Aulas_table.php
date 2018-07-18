<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAulasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Aulas', function(Blueprint $table)
		{
			$table->integer('id_aula', true);
			$table->integer('aula_dia')->nullable();
			$table->date('aula_data');
			$table->integer('id_periodo')->index('FK_Aulas_Periodos');
			$table->integer('id_profmat')->nullable()->index('FK_Aulas_ProfMateria');
			$table->integer('id_horario')->index('FK_Aulas_Horarios');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Aulas');
	}

}
