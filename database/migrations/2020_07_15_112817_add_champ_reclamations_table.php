<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChampReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reclamations', function (Blueprint $table) {
            //
            $table->string('name');
            $table->string('body');
            $table->boolean('actif');
            $table->boolean('read');
            $table->integer('read_by');
            $table->dateTime('read_at');
            $table->text('reponse');
            $table->integer('reponse_by');
            $table->dateTime('reponse_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reclamations', function (Blueprint $table) {
            //
        });
    }
}
