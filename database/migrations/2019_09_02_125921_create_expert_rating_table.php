<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpertRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expert_rating', function (Blueprint $table) {
            $table->increments('id');
            $table->double('expert_rate');
            $table->integer('expert_id')->unsigned();
            $table->integer('site_id')->unsigned();
            $table->timestamps();

            $table->foreign('expert_id')->references('id')->on('users');
            $table->foreign('site_id')->references('id')->on('sites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expert_rating');
    }
}
