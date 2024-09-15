<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('request_id');
            $table->foreign('request_id')->references('id')->on('visiting_requests');
            $table->Boolean('response');
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
        Schema::table('permission_statuses', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['request_id']);
            $table->dropColumn(['user_id','request_id']);
        });
        Schema::dropIfExists('permission_statuses');
    }
}
