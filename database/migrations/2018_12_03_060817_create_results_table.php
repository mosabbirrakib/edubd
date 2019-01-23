<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('result_id');
            $table->string('login_id')->nullable()->comment('student_id');
            $table->integer('id')->nullable()->comment('course_id');
            $table->string('trimester');
            $table->string('course_id');
            $table->string('course_name');
            $table->integer('credit');
            $table->string('grade');
            $table->float('point',3,2);
            $table->string('course_status')->nullable();
            $table->float('gpa',3,2)->nullable();
            $table->float('cgpa',3,2)->nullable();
            $table->string('probation')->nullable();
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
        Schema::dropIfExists('results');
    }
}
