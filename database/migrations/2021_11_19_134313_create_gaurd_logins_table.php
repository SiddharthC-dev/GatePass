<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaurdLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaurd_logins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guard_id');
            $table->foreign('guard_id')->references('id')->on('gaurds');
            $table->integer("type");//0=login,1=logout
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gaurd_logins');
    }
}
