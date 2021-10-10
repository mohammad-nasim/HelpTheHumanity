<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToDonateNowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donate_nows', function (Blueprint $table) {
            $table->string('bkash')->nullable()->after('description');
            $table->string('rocket')->nullable()->after('bkash');
            $table->string('nagad')->nullable()->after('rocket');
            $table->string('reference')->nullable()->after('nagad');
            $table->string('bank')->nullable()->after('reference');
            $table->string('bkash_logo')->nullable()->default('bkash.png')->after('bank');
            $table->string('rocket_logo')->nullable()->default('rocket.png')->after('bkash_logo');
            $table->string('nagad_logo')->nullable()->default('nagad.png')->after('rocket_logo');
            $table->string('bank_logo')->nullable()->default('bank.jpg')->after('nagad_logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donate_nows', function (Blueprint $table) {
            //
        });
    }
}
