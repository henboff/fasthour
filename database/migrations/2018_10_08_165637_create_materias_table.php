<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id_materia', true);
            $table->string('mat_nome')->nullable();
			$table->string('mat_disp')->nullable();
			$table->integer('id_turma')->unsigned()->nullable()->index('FK_Materias_Turmas');
			$table->integer('id_professor')->unsigned()->nullable()->index('FK_Materias_Professores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
