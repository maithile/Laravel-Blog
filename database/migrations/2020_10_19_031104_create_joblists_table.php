<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoblistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joblists', function (Blueprint $table) {

            $table->increments('job_id');
            $table->integer('category_job_id')->unsigned();
            $table->foreign('category_job_id')->references('category_id')->on('categories');
          
            $table->string('job_title');
            $table->string('job_content');
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
        Schema::dropIfExists('joblists');
    }
}
