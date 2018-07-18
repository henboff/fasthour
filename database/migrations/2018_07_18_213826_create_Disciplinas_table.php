<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisciplinasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Disciplinas', function(Blueprint $table)
		{
			$table->string('disc_nome');
			$table->string('disc_disp')->nullable();
			$table->integer('id_disciplina', true);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Disciplinas');
	}

}
