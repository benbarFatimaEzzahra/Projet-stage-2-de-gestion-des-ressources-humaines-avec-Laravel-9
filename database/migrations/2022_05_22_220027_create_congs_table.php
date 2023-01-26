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
        Schema::create('congs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('typeconge_id')->unsigned;
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamps();
            $table->foreign('typeconge_id')->references('id')->on('typeconges')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('congs');
    }
};
