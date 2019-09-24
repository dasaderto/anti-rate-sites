<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link');
            $table->string('img');
            $table->text('about');
            $table->double('rate');
            $table->string('status');
            $table->string('nomination');
            $table->string('developer')->nullable();
            $table->string('develop_city');
            $table->date('launch_date');
            $table->string('owner');
            $table->integer('votes');
            $table->integer('watchers');
            $table->integer('sender_id')->unsigned();

            $table->foreign('sender_id')->references('id')->on('users');
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
        Schema::dropIfExists('sites');
    }
}
