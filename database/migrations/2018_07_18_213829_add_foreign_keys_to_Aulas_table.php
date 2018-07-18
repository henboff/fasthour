<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAulasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Aulas', function(Blueprint $table)
		{
			$table->foreign('id_horario', 'FK_Aulas_Horarios')->references('id_horario')->on('Horarios')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_periodo', 'FK_Aulas_Periodos')->references('id_periodo')->on('Periodos_Aula')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_profmat', 'FK_Aulas_ProfMateria')->references('id_profmat')->on('ProfMateria')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Aulas', function(Blueprint $table)
		{
			$table->dropForeign('FK_Aulas_Horarios');
			$table->dropForeign('FK_Aulas_Periodos');
			$table->dropForeign('FK_Aulas_ProfMateria');
		});
	}

}
