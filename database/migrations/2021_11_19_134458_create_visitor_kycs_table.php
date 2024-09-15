<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorKycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_kycs', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('visitor_id');
            $table->foreign('visitor_id')->references('id')->on('visitors');
            $table->integer('document_type');//0->aadhar card,1=driving licences,3 pancard, 4 job card
            $table->text('document_number');
            $table->string('document_photo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('visitor_kycs', function (Blueprint $table) {
            $table->dropForeign(['visitor_id']);
            $table->dropColumn(['visitor_id']);
        });
        Schema::dropIfExists('visitor_kycs');
    }
}
