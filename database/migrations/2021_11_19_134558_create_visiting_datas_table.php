<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitingDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visiting_requests', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('visitor_id');
            $table->foreign('visitor_id')->references('id')->on('visitors');
            $table->integer('flate_No');
            $table->string('meeting_Purpose');
            $table->text('vehicle_no');
            $table->integer('user_id');
            $table->string('user_name');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::table('visiting_requests', function (Blueprint $table) {
            $table->dropForeign(['visitor_id']);
            $table->dropColumn(['visitor_id']);
        });
        Schema::dropIfExists('visiting_requests');
    }
}
