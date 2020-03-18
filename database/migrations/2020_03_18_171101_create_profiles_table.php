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
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index();
            $table->string('code_etape')->nullable();
            $table->string('version_etape')->nullable();
            $table->string('lib_etape')->nullable();
            $table->integer('num_etu')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('type_etab_prec')->nullable();
            $table->string('lib_etab_prec')->nullable();
            $table->string('etab_annee_prec')->nullable();
            $table->integer('dpt_annee_prec')->nullable();
            $table->string('pays_annee_prec')->nullable();
            $table->string('type_dernier_diplome')->nullable();
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
        //
    }
}
