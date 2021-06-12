<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patient_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('address')->nullable();
            $table->integer('age');
            $table->string('gender',5);
            $table->decimal('weight');
            $table->decimal('height');
            $table->string('allergies');
            $table->string('room_no');
            $table->string('hospital_no');
            $table->string('medical_diagnosis');
            $table->string('physical_limitation');
            $table->string('diet');
            $table->string('physician_name');
            $table->string('contact_person');
            $table->string('contact_relationship');
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
        Schema::dropIfExists('patients');
    }
}
