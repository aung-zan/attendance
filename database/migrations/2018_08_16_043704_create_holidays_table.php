<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->bigIncrements('id')                                 ->comment("Primary key.");
            $table->bigInteger('companies_id')                          ->comment("Foreign keys of companies table. Can know from which company.");
            $table->date('holidays')                                    ->comment("Date of holidays.");
            $table->string('name')                                      ->comment("Name of holidays.");
            $table->tinyInteger('deleted')          ->default(0)        ->comment("Active is 0 and deleted is 1.");
            $table->bigInteger('deleted_user')      ->nullable()        ->comment("Client' id who deleted the holiday.");
            $table->timestamps();
            $table->dateTime('deleted_date')        ->nullable()        ->comment("The deleted holiday's date/time.");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holidays');
    }
}
