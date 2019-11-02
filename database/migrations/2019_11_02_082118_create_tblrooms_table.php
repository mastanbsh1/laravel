<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('room');
			$table->int('categoryid');
			$table->int('locationid');
			$table->string('image');
			$table->double('price');
			$table->double('discount');
			$table->double('dis_price');
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
        Schema::dropIfExists('tblrooms');
    }
}
