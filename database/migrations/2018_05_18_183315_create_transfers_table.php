<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_user_id')->unsigned()->nullable();
            $table->integer('applicant_user_id')->unsigned()->nullable();
            $table->integer('waste_id')->unsigned()->nullable();
            $table->date('transfer_date');
            $table->integer('status_id')->unsigned()->nullable()->default(1);
            $table->timestamps();

            $table->index(['id']);
            $table->index(['owner_user_id']);
            $table->index(['applicant_user_id']);
            $table->index(['waste_id']);
            $table->index(['status_id']);

            $table->foreign('owner_user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('applicant_user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('waste_id')->references('id')->on('waste')->onDelete('set null');
            $table->foreign('status_id')->references('id')->on('status_transfers')->onDelete('set null');

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
        Schema::dropIfExists('transfers');
    }
}
