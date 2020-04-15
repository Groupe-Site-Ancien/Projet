<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // la table profiles represente les caracteristiques individuelles d'un ancien cci
        Schema::create('profiles', function (Blueprint $table) {
            // id de la table profiles
            $table->bigIncrements('id');
            // id de la table users en cle etrangere
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');
            // nom
            $table->string('nom')->nullable();
            // prenom
            $table->string('prenom')->nullable();
            // promotion
            $table->integer('promotion')->nullable();
            // sexe
            $table->string('sexe')->nullable();
            // regime inscription au cci : formation initiale ou continue
            $table->string('regime_inscription')->nullable();
            // age d'entree en formation cci
            $table->integer('age_entree_cci')->nullable();
            // annee du dernier diplome obtenu avant le cci
            $table->integer('annee_dernier_diplome')->nullable();
            // type de bac obtenu par filiere
            $table->string('type_bac')->nullable();
            // region precedente, utile pour jauger l'attractivite du master cci
            $table->string('region_prec')->nullable();
            // stockage du temoignage de l'etudiant par rapport a la formation cci
            $table->string('temoignage')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
