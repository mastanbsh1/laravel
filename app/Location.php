<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Location extends Model {
    $value=DB::table('tbllocation')->orderBy('locationid', 'asc')->get();
    return $value;
}
?>
