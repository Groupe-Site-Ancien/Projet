<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // la table users stocke les infos essentielles d'un utilisateur
        Schema::create('users', function (Blueprint $table) {
            // id de la table users
            $table->id();
            // email pour s'inscrire -> unique
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            // mot de passe
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
