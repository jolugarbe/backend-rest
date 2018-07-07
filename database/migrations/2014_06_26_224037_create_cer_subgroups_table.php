<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCerSubgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cer_subgroups', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->string('code');
            $table->integer('cer_group_id')->unsigned();
            $table->timestamps();

            $table->index(['id']);
            $table->index(['cer_group_id']);

            $table->foreign('cer_group_id')->references('id')->on('cer_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cer_subgroups');
    }
}
