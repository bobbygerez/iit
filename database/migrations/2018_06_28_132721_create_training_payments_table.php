<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainingpayments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prefix')->nullable();    
            $table->integer('receipt_no')->default(0);
            $table->string('firstname');
            $table->string('lastname');
            $table->decimal('paid_amount')->default(0);
            $table->decimal('received_amount')->default(0);
            $table->decimal('change')->default(0);
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('trainingpayments');
    }
}
