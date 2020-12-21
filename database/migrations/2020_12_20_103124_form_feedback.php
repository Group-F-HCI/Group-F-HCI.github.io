<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormFeedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_feed', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->timestamps();
            $table->longtext('soal01');
            $table->longtext('soal02');
            $table->longtext('soal03');
            $table->longtext('soal04');
            $table->longtext('soal05');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_feed');
    }
}
