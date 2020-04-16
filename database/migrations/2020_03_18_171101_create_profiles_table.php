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
            $table->string('code_etape')->nullable();
            $table->string('version_etape')->nullable();
            $table->string('lib_etape')->nullable();
            $table->integer('num_etu')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            // nom
            $table->string('nom')->nullable();
            // prenom
            $table->string('prenom')->nullable();
            $table->string('type_etab_prec')->nullable();
            $table->string('lib_etab_prec')->nullable();
            $table->string('etab_annee_prec')->nullable();
            $table->integer('dpt_annee_prec')->nullable();
            $table->string('pays_annee_prec')->nullable();
            $table->string('type_dernier_diplome')->nullable();
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

   @@ -39,6 +51,6 @@ public function up()
     */
    public function down()
    {
        //
        Schema::dropIfExists('profiles');
    }
}
