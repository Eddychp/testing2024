<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stand_id');
            $table->foreign('stand_id')->references('id')->on('stands')->onDelete('cascade');
            $table->unsignedBigInteger('period_id');
            $table->foreign('period_id')->references('id')->on('periods')->onDelete('cascade');
     
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
        Schema::dropIfExists('pruebas');
        }
};
