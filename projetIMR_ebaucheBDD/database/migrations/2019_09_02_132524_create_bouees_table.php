<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoueesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bouees', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->bigIncrements('id'); //par défaut
            $table->timestamps(); //par défaut, date de la dernière update

            $table->integer('numero');
            $table->string('description',100);
            $table->timestamp('date_debut',0); //précision = 0 = nb de décimales (fractions de secondes)
            $table->decimal('latitude',10,8);
            $table->decimal('longitude',10,8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bouees');
    }
}
