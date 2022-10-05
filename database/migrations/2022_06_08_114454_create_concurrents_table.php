<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcurrentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concurrents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_offer');
            $table->foreign('id_offer')->references('id')->on('offers')->onDelete('restrict')->onUpdate('restrict');
            $table->string('Nom');
            $table->string('Postuler');
            $table->string('Dossier_complet');
            $table->string('existe');
            $table->string('eliminer');
            $table->string('Motif');
            $table->float('Mantant_dactes');
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
        Schema::dropIfExists('concurrents');
    }
}
