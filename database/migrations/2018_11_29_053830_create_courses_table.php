<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('courses_id');
            $table->integer('time_slot_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->integer('registration_id')->nullable();
            $table->string('course_name');
            $table->string('login_id')->nullable();
            $table->string('course_id');
            $table->integer('credit');
            $table->string('trimester');
            $table->string('grade')->nullable();
            $table->float('point',3,2)->nullable();
            $table->string('course_status')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
