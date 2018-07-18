<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Horarios', function(Blueprint $table)
		{
			$table->foreign('id_bimestre', 'FK_Horarios_Bimestres')->references('id_bimestre')->on('Bimestres')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Horarios', function(Blueprint $table)
		{
			$table->dropForeign('FK_Horarios_Bimestres');
		});
	}

}
