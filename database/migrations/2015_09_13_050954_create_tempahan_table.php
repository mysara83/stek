<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempahan', function($table)
        {
            $table->increments('id');
            $table->string('nama');
            $table->string('email');
            $table->string('bahagian');
            $table->string('unit')->nullable();
            $table->string('no_telefon');
            $table->string('destinasi');
            $table->string('tujuan');
            $table->date('tarikh_pergi');
            $table->time('masa_pergi');
            $table->date('tarikh_balik');
            $table->time('masa_balik');
            $table->integer('bil_penumpang');
            $table->timestamps();

            // We'll need to ensure that MySQL uses the InnoDB engine to
            // support the indexes, other engines aren't affected.
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tempahan');
    }
}
