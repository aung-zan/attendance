<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id')                                     ->comment("Primary key.");
            $table->bigInteger('companies_id')                              ->comment("Foreign keys of companies table. Can know from which company.");
            $table->bigInteger('staff_id')                                  ->comment("Foreign keys of staffs table. Can know whom attendance record.");
            $table->dateTime('origin_in')                                   ->comment("Origin Check In datetime.");
            $table->dateTime('origin_out')              ->nullable()        ->comment("Origin Check Out datetime.");
            $table->dateTime('in')                                          ->comment("Rounded Check In datetime.");
            $table->dateTime('out')                     ->nullable()        ->comment("Rounded Check Out datetime.");
            $table->float('normal', 5, 2)               ->nullable()        ->comment("Normal working hours.");
            $table->float('overtime', 5, 2)             ->nullable()        ->comment("Overtime working hours.");
            $table->float('break', 2, 2)                ->nullable()        ->comment("Break/Rest hour.");
            $table->float('total_working', 5, 2)        ->nullable()        ->comment("Total Working hours.");
            $table->float('total', 5, 2)                ->nullable()        ->comment("Total hours. (Total working + break/rest)");
            $table->tinyInteger('deleted')              ->default(0)        ->comment("Active is 0 and deleted is 1.");
            $table->bigInteger('deleted_user')          ->nullable()        ->comment("Client' id who delete the attendance.");
            $table->timestamps();
            $table->dateTime('deleted_date')            ->nullable()        ->comment("The deleted attendance's date/time.");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
