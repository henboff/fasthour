<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDisciplinasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('disciplinas', function(Blueprint $table)
		{
			$table->foreign('id_professor', 'FK_Disciplinas_Professores')->references('id_professor')->on('professores')->onUpdate('CASCADE')->onDelete('SET NULL');
			$table->foreign('id_turma', 'FK_Disciplinas_Turmas')->references('id_turma')->on('turmas')->onUpdate('CASCADE')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('disciplinas', function(Blueprint $table)
		{
			$table->dropForeign('FK_Disciplinas_Professores');
			$table->dropForeign('FK_Disciplinas_Turmas');
		});
	}

}
