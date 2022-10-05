<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decisions', function (Blueprint $table) {
            $table->id();
            $table->Integer('num_decision');
            $table->unsignedBigInteger('num_avis');
            $table->foreign('num_avis')->references('id')->on('avis')->onDelete('restrict')->onUpdate('restrict');
            $table->String('Nom');
            $table->foreign('Nom')->references('Nom')->on('juries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('decisions');
    }
}
