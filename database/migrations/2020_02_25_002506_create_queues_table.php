<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sumbit_queues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('rep_name');
            $table->string('client_name');
            $table->string('business_name');
            $table->string('email_name');
            $table->string('reason');
            $table->integer('phone');
            $table->text('message');
            $table->text('vulnerability');
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
        Schema::dropIfExists('queues');
    }
}
