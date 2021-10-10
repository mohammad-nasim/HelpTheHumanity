<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('donate_now_id')->nullable();
            $table->bigInteger('cause_id')->nullable();
            $table->string('bkash')->nullable();
            $table->string('rocket')->nullable();
            $table->string('nagad')->nullable();
            $table->string('reference')->nullable();
            $table->string('bank')->nullable();
            $table->string('bkash_logo')->default('bkash.png');
            $table->string('rocket_logo')->default('rocket.png');
            $table->string('nagad_logo')->default('nagad.png');
            $table->string('bank_logo')->default('bank.png');
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
        Schema::dropIfExists('payment_methods');
    }
}
