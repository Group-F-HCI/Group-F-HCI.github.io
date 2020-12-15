<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveridDbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surverid_dbs', function (Blueprint $table) {
            $table->string('username');           
            $table->string('fullname');
            $table->string('email');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surverid_dbs', function($table){
            $table->dropColumn('username');           
            $table->dropColumn('fullname');
            $table->dropColumn('email');
            $table->dropColumn('image');
        });
    }
}
