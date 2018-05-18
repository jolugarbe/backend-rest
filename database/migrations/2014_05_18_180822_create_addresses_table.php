<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address_line');
            $table->integer('locality_id')->unsigned();
            $table->integer('postal_code');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->text('observations')->nullable();
            $table->timestamps();

            $table->foreign('locality_id')->references('id')->on('localities')->onDelete('cascade');

            $table->index(['id']);
            $table->index(['locality_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
