<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWasteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waste', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->float('quantity', 10, 2);
            $table->string('measured_unit');
            $table->string('composition');
            $table->string('presentation')->nullable();
            $table->date('generation_date');
            $table->date('pickup_date');
            $table->string('packaging');
            $table->string('handling');
            $table->integer('address_id')->unsigned()->nullable();
            $table->string('transport');
            $table->boolean('dangerous');
            $table->string('production')->nullable();
            $table->integer('cer_code_id')->unsigned()->nullable();
            $table->integer('t_frequency_id')->unsigned()->nullable();
            $table->integer('t_waste_id')->unsigned()->nullable();
            $table->integer('t_ad_id')->unsigned()->nullable();
            $table->integer('creator_user_id')->unsigned()->nullable();
            $table->integer('owner_user_id')->unsigned()->nullable()->default(null);
            $table->boolean('available')->default(1);
            $table->boolean('acquired')->nullable();
            $table->timestamps();

            $table->index(['id']);
            $table->index(['address_id']);
            $table->index(['t_frequency_id']);
            $table->index(['t_waste_id']);
            $table->index(['t_ad_id']);
            $table->index(['cer_code_id']);
            $table->index(['creator_user_id']);
            $table->index(['owner_user_id']);

            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('set null');
            $table->foreign('t_frequency_id')->references('id')->on('frequency_type')->onDelete('set null');
            $table->foreign('t_waste_id')->references('id')->on('waste_type')->onDelete('set null');
            $table->foreign('t_ad_id')->references('id')->on('ad_type')->onDelete('set null');
            $table->foreign('cer_code_id')->references('id')->on('cer_codes')->onDelete('set null');
            $table->foreign('creator_user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('owner_user_id')->references('id')->on('users')->onDelete('set null');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('waste');
    }
}
