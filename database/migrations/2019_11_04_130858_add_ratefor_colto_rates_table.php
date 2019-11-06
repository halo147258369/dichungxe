<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRateforColtoRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rates', function (Blueprint $table) {
            $table->dropColumn('vehicle_id');
            $table->dropColumn('user_id');
            $table->integer('member_id')->after('id');
            $table->integer('booking_id')->after('member_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rates', function (Blueprint $table) {
            $table->dropColumn('booking_id');
            $table->dropColumn('member_id');
            $table->integer('vehicle_id');
            $table->integer('user_id');
        });
    }
}
