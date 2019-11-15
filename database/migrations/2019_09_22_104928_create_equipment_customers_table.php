<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_customers', function (Blueprint $table) {
            $table->bigIncrements('equipment_customer_id');
            $table->integer('quantity');
            $table->bigInteger('book_id')->unsigned();
            $table->bigInteger('equip_id')->unsigned();
            $table->timestamps();

            $table->foreign('book_id')->references('book_id')->on('booking');
            $table->foreign('equip_id')->references('equip_id')->on('equipment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment_customers');
    }
}
