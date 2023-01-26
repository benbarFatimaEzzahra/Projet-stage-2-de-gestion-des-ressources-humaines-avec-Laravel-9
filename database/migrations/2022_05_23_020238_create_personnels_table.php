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
        Schema::create('personnels', function (Blueprint $table) {
            
                $table->id();
                $table->unsignedBigInteger('service_id')->unsigned();
                $table->string('nom');
                $table->string('prenom');
                $table->string('cin');
                $table->date('date_ambauche');
                $table->enum('fonction',['Responsable','Majorant(e)','Agent','Médecin','Inférmier(e)']);
                $table->float('salaire_de_base');
                $table->enum('sexe',['F','M']);
                $table->date('date_naissance');
                $table->string('lieu_naissance');
                $table->enum('situation_familial',['Marié(e)','Divorcé(e)','Célibataire']);
                $table->integer('nbr_enfant');
                $table->string('photo', 300);
                $table->string('fichier');
                $table->text('adresse');
                $table->string('tel');
                $table->timestamps();
                $table->foreign('service_id')->nullable()->references('id')->on('services')->onDelete('cascade');
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
};
