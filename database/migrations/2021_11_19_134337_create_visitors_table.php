<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->text('mobile_no');
            $table->date('dob')->nullable();
            $table->text('photo');
            $table->text('Address');
            $table->string('tag');
            $table->unsignedBigInteger('apartment_id');
            $table->foreign('apartment_id')->references('id')->on('apartments');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
