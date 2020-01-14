<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->bigIncrements('equip_id')->index();
            $table->string('equipName');
            $table->string('equipType');
            $table->double('equipPrice');
            $table->integer('equipQuantity');
            $table->integer('equipCurrentQuantity')->nullable();
            $table->string('staff_id');
            $table->string('image');
            $table->timestamps();

            $table->foreign('staff_id')->references('staff_id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
}
