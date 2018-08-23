<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id')                 ->comment("Primary key.");
            $table->bigInteger('companies_id')          ->comment("Foreign keys of companies table. Can know from which company.");
            $table->integer('round_time')               ->comment("Round times. 15, 30 or 60 minutes");
            $table->integer('weekend')                  ->comment("To know weekend is Sun only or Sat and Sun.");
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
        Schema::dropIfExists('settings');
    }
}
