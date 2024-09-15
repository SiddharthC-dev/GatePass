<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaurdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

        public function up()
        {
            Schema::create('gaurds', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->text('address');
                $table->string('mobile_no',12);
                $table->string('password',256);
                $table->time('start_shift');
                $table->time('end_shift');
                $table->unsignedBigInteger('apartment_id');
                $table->foreign('apartment_id')->references('id')->on('apartments');
                $table->timestamps();
            });
        }



    public function down()
    {
        Schema::dropIfExists('gaurds');
    }
}
