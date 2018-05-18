<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('address_id')->unsigned()->nullable();
            $table->string('contact_person')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('email')->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            $table->index(['id']);
            $table->index(['user_id']);
            $table->index(['address_id']);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notification_data');
    }
}
