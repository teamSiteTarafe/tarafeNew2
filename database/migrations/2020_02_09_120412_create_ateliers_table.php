<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAteliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ateliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo',240);
            $table->string('nomAtelier',200);
            $table->string('nomProprietaire',200);
            $table->text('description');
            $table->string('contact',20);
            $table->text('localisation');
            $table->string('email',200);
            $table->string('motDePasse',200);
            // $table->integer('prestationId')->unsigned();
            // $table->foreign('prestationId')
            //       ->references('id')
            //       ->on('prestations')
            //       ->onDelete('cascade');
            $table->boolean('desactive')->default(false);
            $table->timestamps(); //gère la date de créa et celle de modif
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ateliers');
    }
}
