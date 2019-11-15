<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->string('staff_id')->primary()->index()->unique();
            $table->string('staffName');
            $table->string('staffAddress');
            $table->string('password');
            $table->string('staffEmail')->unique();
            $table->string('staffPhoneNo');
            $table->string('staffDesignation');
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
        Schema::dropIfExists('staff');
    }
}
