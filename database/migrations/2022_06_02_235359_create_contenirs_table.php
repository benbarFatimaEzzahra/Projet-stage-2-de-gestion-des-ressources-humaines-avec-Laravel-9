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
        Schema::create('contenirs', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('cong_id')->unsigned(); 
            $table->unsignedBigInteger('jour_id')->unsigned();
            $table->timestamps();
            $table->foreign('cong_id')->references('id')->on('congs')->onDelete('cascade');
            $table->foreign('jour_id')->references('id')->on('jours')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenirs');
    }
};