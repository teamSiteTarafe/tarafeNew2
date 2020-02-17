<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',200);
            $table->text('description');
            $table->string('origine',220);
            $table->string('photo',240);

            $table->integer('atelier_id')->unsigned();
            $table->foreign('atelier_id')
                  ->references('id')
                  ->on('ateliers')
                  ->onDelete('cascade');
                  
            $table->integer('categorie_id')->unsigned();
            $table->foreign('categorie_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');

            $table->integer('prixUnitaire');
            $table->integer('quantiteEnStock');
            $table->boolean('statut')->default(false);
            $table->text('couleur');
            $table->text('taille');
            $table->string('tags',240);
            $table->boolean('supprime')->default(false);
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
        Schema::dropIfExists('produits');
    }
}
