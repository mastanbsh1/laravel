<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model {
    $value=DB::table('user_booking_details')->orderBy('bookingid', 'asc')->get();
    return $value;
}
?>
