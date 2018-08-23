<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->bigIncrements('id')                                 ->comment("Primary key.");
            $table->bigInteger('companies_id')                          ->comment("Foreign keys of companies table. Can know from which company.");
            $table->string('name')                                      ->comment("Staff's name.");
            $table->string('email')->unique()                           ->comment("Staff's email.");
            $table->string('password')                                  ->comment("Staff's password.");
            $table->rememberToken()                                     ->comment("Password remember token");
            $table->tinyInteger('deactivate')       ->default(0)        ->comment("Activate is 0 and deactivate is 1.");
            $table->tinyInteger('deleted')          ->default(0)        ->comment("Active is 0 and deleted is 1.");
            $table->bigInteger('deleted_user')      ->nullable()        ->comment("Client' id who deleted the staff.");
            $table->timestamps();
            $table->dateTime('deleted_date')        ->nullable()        ->comment("The deleted staff's date/time.");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
