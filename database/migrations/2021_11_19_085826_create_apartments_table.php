<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('apartment_name');
            $table->text('apartment_address');
            $table->string('apartment_city');
            $table->string('apartment_district');
            $table->string('apartment_state');
            $table->integer('apartment_pin_code');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}
