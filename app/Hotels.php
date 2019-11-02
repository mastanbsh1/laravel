<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Hotels extends Model {
    $value=DB::table('tblhotels')->orderBy('hotelid', 'asc')->get();
    return $value;
}
?>