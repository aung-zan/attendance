<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id')                     ->comment("Primary key.");
            $table->string('username')                      ->comment("Admin's username. Use for login admin account.");
            $table->string('name')                          ->comment("Admin's name.");
            $table->string('email')     ->unique()          ->comment("Admin's email.");
            $table->string('password')                      ->comment("Admin's password.");
            $table->rememberToken()                         ->comment("Forgot password token.");
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
        Schema::dropIfExists('admins');
    }
}
