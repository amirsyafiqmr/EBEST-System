<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking', function (Blueprint $table) {
            $table->bigIncrements('trackNo')->index();
            $table->string('trackLocation');
            $table->string('dateTimeTrack');
            $table->bigInteger('book_id')->unsigned();
            $table->timestamps();
            //$table->string('staff_id');
            //$table->string('cust_id');


            $table->foreign('book_id')->references('book_id')->on('booking');
            //$table->foreign('staff_id')->references('staff_id')->on('staff');
            //$table->foreign('cust_id')->references('cust_id')->on('customer');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('tracking');


    }
}
