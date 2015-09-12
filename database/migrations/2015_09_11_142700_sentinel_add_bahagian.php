<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SentinelAddBahagian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add the username to the users table
        Schema::table('users', function($table)
        {
            $table->string('bahagian')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         // Remove username from the users table
        Schema::table('users', function($table)
        {
            $table->dropColumn('bahagian');
        });
    }
}
