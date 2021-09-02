<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->primary('id');
            $table->enum('type', ['Red', 'Orange', 'Yellow', 'Green', 'Dry']);
            $table->enum('trend',['rest', 'down','up']);
            $table->string('location');
            $table->string('river');
            $table->float('water_level');
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
        Schema::dropIfExists('alerts');
    }
}
