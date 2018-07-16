<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('activity_id')->unsigned()->nullable();
            $table->string('business_name');
            $table->string('cif')->unique()->nullable();
            $table->integer('address_id')->unsigned()->nullable();
            $table->string('contact_person')->nullable();
            $table->integer('telephone');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('carbon_footprint')->nullable()->default(0);
            $table->date('carbon_inscription')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->index(['id']);
            $table->index(['activity_id']);
            $table->index(['address_id']);

            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('set null');

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
        Schema::dropIfExists('users');
    }
}
