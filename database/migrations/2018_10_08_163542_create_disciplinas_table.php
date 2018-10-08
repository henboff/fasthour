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
			$table->integer('id_disciplina')->primary();
			$table->integer('id_turma')->nullable()->index('FK_Disciplinas_Turmas');
			$table->integer('id_professor')->nullable()->index('FK_Disciplinas_Professores');
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
