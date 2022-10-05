<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstPvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_pvs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_offer');
            $table->foreign('id_offer')->references('id')->on('offers')->onDelete('restrict')->onUpdate('restrict');
            $table->Integer('num_concurrents');
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
        Schema::dropIfExists('first_pvs');
    }
}
