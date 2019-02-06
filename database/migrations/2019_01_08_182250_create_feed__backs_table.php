<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedBacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed__backs', function (Blueprint $table) {
            $table->increments('feed_back_id');
            $table->uuid('user_id');
            $table->uuid('vendor_id');
            $table->string('vendor_name');
            $table->string('5_very_good');
            $table->string('4_good');
            $table->string('3_avarage');
            $table->string('2_faire');
            $table->string('1_high_bad');
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
        Schema::dropIfExists('feed__backs');
    }
}
