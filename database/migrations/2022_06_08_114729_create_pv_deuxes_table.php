<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvDeuxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_deuxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_offer');
            $table->foreign('id_offer')->references('id')->on('offers')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('id_pv_one');
            $table->foreign('id_pv_one')->references('id')->on('first_pvs')->onDelete('restrict')->onUpdate('restrict');
            $table->float('Mantant_dactes_apres_verification');
            $table->float('Taux');
            $table->string('observe');
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
        Schema::dropIfExists('pv_deuxes');
    }
}
