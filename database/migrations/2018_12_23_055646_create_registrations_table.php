<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('registration_id');
            $table->integer('login_id')->nullable();
            $table->integer('id')->nullable()->comment('course_id');
            $table->integer('section_id')->nullable();
            $table->integer('time_slot_id')->nullable();
            $table->string('trimester');
            $table->string('course_id');
            $table->string('course_name');
            $table->string('section');
            $table->string('day');
            $table->string('room');
            $table->string('time_slot');
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
        Schema::dropIfExists('registrations');
    }
}
