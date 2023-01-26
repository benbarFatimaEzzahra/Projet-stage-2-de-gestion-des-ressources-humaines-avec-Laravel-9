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
        Schema::create('demanders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cong_id')->unsigned(); 
            $table->unsignedBigInteger('personnel_id')->unsigned();
            $table->timestamps();
            $table->foreign('cong_id')->references('id')->on('congs')->onDelete('cascade');
            $table->foreign('personnel_id')->references('id')->on('personnels')->onDelete('cascade');
            $table->date('date_demande');
            $table->enum('commentaires_dem',['Validé','En cours','Refusé']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demanders');
    }
};
