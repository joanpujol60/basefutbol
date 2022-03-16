<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('partits', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('jornada');
            $table->string('categoria');
            $table->bigInteger('local')->unsigned();
            $table->Integer('resultat_local');
            $table->bigInteger('visitant')->unsigned();
            $table->Integer('resultat_visitant');
            
            $table->timestamps();
            $table->foreign('local')->references('id')->on('clubs')->onDelete("cascade");
            $table->foreign('visitant')->references('id')->on('clubs')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
