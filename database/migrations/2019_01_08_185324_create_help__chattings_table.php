<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpChattingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help__chattings', function (Blueprint $table) {
            $table->increments('chat_id');
            $table->uuid('user_id');
            $table->uuid('vendor_id');
            $table->dateTime('wedding_date');
            $table->string('vendor_type');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('mobile_no');
            $table->string('land_no');
            $table->decimal('eastimate_budget', 10, 2);
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
        Schema::dropIfExists('help__chattings');
    }
}
