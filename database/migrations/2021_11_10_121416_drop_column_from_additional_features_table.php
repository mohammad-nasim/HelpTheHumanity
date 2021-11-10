<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnFromAdditionalFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('additional_features', function (Blueprint $table) {
            $table->dropColumn('title');
        });

        Schema::table('additional_about_us', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('additional_features', function (Blueprint $table) {
            $table->string('title');
        });

        Schema::table('additional_about_us', function (Blueprint $table) {
            $table->string('title');
        });
    }
}
