<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_hours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('employee_id');
            $table->Integer('office_start_time');
            $table->Integer('start_break_time');
            $table->Integer('end_break_time');
            $table->Integer('office_end_time');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('tracking_hours');
    }
}
