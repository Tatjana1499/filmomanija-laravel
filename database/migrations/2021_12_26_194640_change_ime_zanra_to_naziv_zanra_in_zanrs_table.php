<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeImeZanraToNazivZanraInZanrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('naziv_zanra_in_zanrs', function (Blueprint $table) {
            $table->renameColumn('imeZanra','nazivZanra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('naziv_zanra_in_zanrs', function (Blueprint $table) {
            $table->renameColumn('nazivZanra','imeZanra');
        });
    }
}
