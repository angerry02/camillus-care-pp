<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVioRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vio_records', function (Blueprint $table) {
            $table->id();
            $table->string('gcs')->nullable();
            $table->string('bp')->nullable();
            $table->string('hr')->nullable();
            $table->string('rr')->nullable();
            $table->string('t')->nullable();
            $table->string('o2_sat')->nullable();
            $table->string('iv')->nullable();
            $table->string('oral')->nullable();
            $table->string('urine')->nullable();
            $table->string('drainage')->nullable();
            $table->string('bowel_movement')->nullable();
            $table->string('remark')->nullable();
            $table->datetime('datetime_added')->nullable();
            $table->integer('patient_id')->unsigned();
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
        Schema::dropIfExists('vio_records');
    }
}
