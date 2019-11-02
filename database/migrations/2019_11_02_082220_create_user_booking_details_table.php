<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_booking_details', function (Blueprint $table) {
            $table->bigIncrements('bookingid');
			$table->int('customerid');
			$table->int('roomid');
			$table->datetime('bookdate');
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
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
        Schema::dropIfExists('user_booking_details');
    }
}
