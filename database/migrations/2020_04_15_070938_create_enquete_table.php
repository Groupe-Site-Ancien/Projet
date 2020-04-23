<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // la table enquete represente la situation d'un ancien cci à un moment T
        Schema::create('enquete', function (Blueprint $table) {
            // id de la table enquete
            $table->bigIncrements('id');
            // id de la table users en cle etrangere
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');
            // situation emploi au moment de l'enquete
            $table->string('situation')->nullable();
            // delai pour trouver premier emploi apres diplome cci
            $table->string('delai_emploi')->nullable();
            // moyen d'obtention ou canal du premier emploi
            $table->string('canal_emploi')->nullable();
            // type employeur public / prive
            $table->string('type_employeur')->nullable();
            // nom de l'employeur au moment de l'enquete
            $table->string('nom_employeur')->nullable();
            // temps de travail
            $table->string('temps_travail')->nullable();
            // type de contrat CDI ou CDD
            $table->string('type_contrat')->nullable();
            // grand domaine de l'informatique dans lequel l'ancien cci travaille : dev, BI, infra, MOA, gestion projet...
            $table->string('domaine_emploi')->nullable();
            // intitule de l'emploi a saisir par l'ancien cci -> va servir pour la partie temoignage
            $table->string('intitule_emploi')->nullable();
            // region actuelle de l'emploi
            $table->string('region_emploi')->nullable();
            // tranche salaire net mensuel en € -> pour stats camembert
            $table->string('tranche_salaire')->nullable();
            // salaire net mensuel en € -> plus precis pour faire des stats eventuellement sur moyenne ou mediane
            $table->integer('salaire_net')->nullable();
            // satisfaction emploi actuel : totalement / plutot satisfait, plutot insatisfait, pas du tout satisfait
            $table->string('satisfaction_emploi')->nullable();
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
        Schema::dropIfExists('enquete');
    }
}
