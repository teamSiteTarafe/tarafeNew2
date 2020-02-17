<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 50);
            $table->string('prenom', 240);
            $table->string('numeroDeTelephone',20)->unique();
            $table->string('email')->unique();
            $table->string('motDePasse',200);
            // $table->datetime('dateAjout');
            // $table->datetime('dateModif');
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
        Schema::dropIfExists('clients');
    }
}
