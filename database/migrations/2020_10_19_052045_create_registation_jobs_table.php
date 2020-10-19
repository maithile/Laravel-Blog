<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistationJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registation_jobs', function (Blueprint $table) {
            $table->increments('registation_id');

            $table->integer('job_registation_id')->unsigned();
            $table->foreign('job_registation_id')->references('job_id')->on('joblists');


            $table->integer('user_registation_id')->unsigned();
            $table->foreign('user_registation_id')->references('user_id')->on('users');

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
        Schema::dropIfExists('registation_jobs');
    }
}
