<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCerCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cer_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->string('code');
            $table->integer('cer_subgroup_id')->unsigned();
            $table->timestamps();

            $table->index(['id']);
            $table->index(['cer_subgroup_id']);

            $table->foreign('cer_subgroup_id')->references('id')->on('cer_subgroups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cer_codes');
    }
}
