<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('address')->nullable();
            $table->string('contact_no')->nullable();
            $table->date('date_hired')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('philhealth_no')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('role', 10)->nullable();
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
        Schema::dropIfExists('employees');
    }
}
