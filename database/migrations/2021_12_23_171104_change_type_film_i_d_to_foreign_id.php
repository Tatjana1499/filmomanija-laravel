<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTypeFilmIDToForeignId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('iznajmljivanjes', function (Blueprint $table) {
            $table->foreignId('clanID')->change();
            $table->foreignId('filmID')->change();
            $table->dropColumn('iznajmljivanjeID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('iznajmljivanjes', function (Blueprint $table) {
            $table->string('clanID')->change();
            $table->string('filmID')->change();
            $table->integer('iznajmljivanjeID');
        });
    }
}
