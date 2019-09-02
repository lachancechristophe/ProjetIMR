<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonneeBoueesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donnee_bouees', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->bigIncrements('id'); //par défaut
            $table->timestamps(); //par défaut, date de la dernière update

            $table->integer('id_bouee');
            $table->foreign('id_bouee')->references('id')->on('bouees'); //clé étrangère

            $table->decimal('temperature',4,2);
            $table->decimal('salinite',4,2);
            $table->decimal('debit',4,2);
            $table->boolean('valide');
            $table->timestamp('date_temps',0); //précision = 0 = nb de décimales (fractions de secondes)
            $table->decimal('latitude',10,8);
            $table->decimal('longitude',10,8);
            $table->integer('batterie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donnee_bouees');
    }
}
