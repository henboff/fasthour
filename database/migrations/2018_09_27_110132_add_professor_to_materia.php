<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfessorToMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Materias', function (Blueprint $table) {
                $table->integer('id_professor')->nullable()->index('FK_Materias_Professores');
                $table->foreign('id_professor', 'FK_Materias_Professores')->references('id_professor')->on('Professores')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Materias', function (Blueprint $table) {
            $table->dropForeign('FK_Materias_Professores');
            $table->dropColumn('id_professor');
        });
    }
}
