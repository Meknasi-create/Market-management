<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvTroisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_trois', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_offer');
            $table->foreign('id_offer')->references('id_offer')->on('pv_deuxes')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('id_gagnant');
            $table->foreign('id_gagnant')->references('id_offer')->on('concurrents')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('id_pv_deux');
            $table->foreign('id_pv_deux')->references('id')->on('pv_deuxes')->onDelete('restrict')->onUpdate('restrict');
            $table->string('Nom_gerant');
            $table->string('qualiter');
            $table->string('Num_cnss');
            $table->float('capital_social');
            $table->string('adresse');
            $table->string('registre');
            $table->Integer('RIB');
            $table->String('banque');
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
        Schema::dropIfExists('pv_trois');
    }
}
