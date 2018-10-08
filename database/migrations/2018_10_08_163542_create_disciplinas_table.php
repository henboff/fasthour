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
		Schema::create('disciplinas', function(Blueprint $table)
		{
			$table->string('disc_nome')->nullable();
			$table->string('disc_disp')->nullable();
			$table->increments('id_disciplina', true);
			$table->integer('id_turma')->unsigned()->nullable()->index('FK_Disciplinas_Turmas');
			$table->integer('id_professor')->unsigned()->nullable()->index('FK_Disciplinas_Professores');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('disciplinas');
	}

}
