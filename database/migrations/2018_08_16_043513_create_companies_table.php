<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id')                                 ->comment("Primary Key");
            $table->string('name')                                      ->comment("Company's name");
            $table->tinyInteger('deactivate')       ->default(0)        ->comment("Activate is 0 and deactivate is 1. Company deactivate or activate.");
            $table->tinyInteger('deleted')          ->default(0)        ->comment("Active is 0 and deleted is 1. Company active or deleted.");
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
        Schema::dropIfExists('companies');
    }
}
