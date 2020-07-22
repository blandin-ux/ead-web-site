<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChampEmptempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('emptemps', function (Blueprint $table) {
            //
            $table->integer('semestre_id');
            $table->integer('filiere_id');
            $table->string('path',150);
            $table->string('titre',150);
            $table->integer('site_id');
            $table->integer('annee_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('emptemps', function (Blueprint $table) {
            //
        });
    }
}
