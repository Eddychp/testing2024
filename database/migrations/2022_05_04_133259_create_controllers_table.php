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
        Schema::create('controllers', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            //$table->unsignedBigInteger('partner_id');
            //$table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
            //$table->unsignedBigInteger('period_id')->nullable(false);
            //$table->foreign('period_id')->references('id')->on('periods')->onDelete('cascade');
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
        Schema::dropIfExists('controllers');
    }
};
