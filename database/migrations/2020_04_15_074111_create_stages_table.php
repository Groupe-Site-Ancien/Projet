<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // la table stages sert a stocker les informations concernant les offres de stage proposees par les anciens cci
        Schema::create('stages', function (Blueprint $table) {
            // id de la table stages
            $table->bigIncrements('id');
            // id de la table profiles en cle etrangere
            $table->unsignedBigInteger('profile_id')->index();
            $table->foreign('profile_id')->references('id')->on('profiles');
            // intitule de l'offre de stage
            $table->string('intitule_stage')->nullable();
            // domaine d'emploi du stage : dev, BI, infra... -> va servir pour moteur de recherche stage
            $table->string('domaine_stage')->nullable();
            // entreprise d'accueil du stage
            $table->string('entreprise_stage')->nullable();
            // region du stage -> va servir pour moteur de recherche stage
            $table->string('region_stage')->nullable();
            // lieu exact du stage, ex : ville
            $table->string('ville_stage')->nullable();
            // description du stage, missions
            $table->string('missions_stage')->nullable();
            // description du profil recherche
            $table->string('profil_stage')->nullable();
            // remuneration - gratification stage
            $table->string('rem_stage')->nullable();
            // lien url vers l'offre de stage sur site entreprise ou linkedin par ex
            $table->string('url_stage')->nullable();
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
        Schema::dropIfExists('stages');
    }
}
