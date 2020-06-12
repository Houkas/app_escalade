<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToVoiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voies', function (Blueprint $table) {
            $table->text('img_un');
            $table->text('img_deux');
            $table->text('img_trois');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voies', function (Blueprint $table) {
            $table->dropColumn('img_un');
            $table->dropColumn('img_deux');
            $table->dropColumn('img_trois');
        });
    }
}
