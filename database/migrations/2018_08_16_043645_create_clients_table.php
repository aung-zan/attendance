<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id')                                 ->comment("Primary key");
            $table->bigInteger('companies_id')                          ->comment("Foreign keys of companies table. Can know from which company.");
            $table->string('email')                 ->unique()          ->comment("Client's email.");
            $table->string('name')                                      ->comment("Client's name");
            $table->string('password')                                  ->comment("Client's password.");
            $table->tinyInteger('deactivate')       ->default(0)        ->comment("Activate is 0 and deactivate is 1. Clients deactivate or activate.");
            $table->tinyInteger('deleted')          ->default(0)        ->comment("Active is 0 and deleted is 1. Clients active or deleted.");
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
        Schema::dropIfExists('clients');
    }
}
