<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGoogleTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){}
    // {
    //     Schema::table("users", function (Blueprint $table) {
    //         $table->string('google_id');
    //         $table->string('twitter_profile');
    //         $table->string('telegram_profile');
    //         $table->string('medium_profile');
    //         $table->string('bitcoin_profile');
    //         $table->string('eth_profile');
    //     });
    //}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("users", function (Blueprint $table) {
            $table->dropColumn('google_id');
        });
    }
}
