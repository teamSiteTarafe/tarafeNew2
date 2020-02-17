<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoutiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boutiques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo',240);
            $table->string('nomBoutique',200);
            $table->string('nomProprietaire',200);
            $table->text('description');
            $table->string('contact',20);
            $table->text('localisation');
            $table->string('email',200);
            $table->string('motDePasse',200);
            $table->boolean('desactive')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boutiques');
    }
}
