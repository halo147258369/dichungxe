<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMigratePlacesAndTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->integer('district_id');
            $table->integer('ward_id');
            $table->integer('city_id');
            $table->string('address');
            $table->dropColumn('to_id');
            $table->dropColumn('from_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->dropColumn('district_id');
            $table->dropColumn('ward_id');
            $table->dropColumn('city_id');
            $table->dropColumn('address');
            $table->integer('from_id');
            $table->integer('to_id');
        });
    }
}
