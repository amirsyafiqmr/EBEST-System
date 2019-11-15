<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('book_id')->index();
            $table->string('venue');
            $table->string('eventDate');
            $table->string('organizerPno');
            $table->double('totalPrice');
            $table->string('deliveryDate')->nullable();
            $table->string('collectDate')->nullable();
            $table->string('status')->nullable();
            $table->string('cust_id');
            $table->string('staff_id')->nullable();
            $table->timestamps();


            $table->foreign('cust_id')->references('cust_id')->on('customer');
            $table->foreign('staff_id')->references('staff_id')->on('staff');
            //$table->foreign('equip_id')->references('equip_id')->on('equipment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('booking');
        Schema::enableForeignKeyConstraints();
    }
}
