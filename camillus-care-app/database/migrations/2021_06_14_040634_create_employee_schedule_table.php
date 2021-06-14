<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_schedules', function (Blueprint $table) {
            $table->id();
            $table->time('from');
            $table->time('to');
            $table->date('effective_date');
            $table->integer('employee_id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->integer('schedule_status')->default('0');
            $table->foreign('employee_id')->references('employee_id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('patient_id')->references('patient_id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('employee_schedules');
    }
}
