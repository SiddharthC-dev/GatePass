<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformationTable extends Migration
{

    public function up()
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('user_name');
            $table->text('flat_No');
            $table->text('wing');
            $table->string('type');
            $table->string('email');
            $table->text('mobile_No');
            $table->string('occupation');
            $table->date('dob');
            $table->unsignedBigInteger('apartment_id');
            $table->foreign('apartment_id')->references('id')->on('apartments');
            $table->timestamps();
        });
    }


    public function down()
    {

        Schema::table('user_information', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['apartment_id']);
            $table->dropColumn(['user_id','apartment_id']);
        });
        Schema::dropIfExists('user_information');
    }
}
