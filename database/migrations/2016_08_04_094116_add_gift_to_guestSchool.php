<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AddGiftToGuestSchool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('guest_school', function (Blueprint $table) {
            $table->timestamp('gift')->default(null)->nullable()->after('confirm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('guest_school', function (Blueprint $table) {
            $table->dropColumn('gift');
        });
    }
}
