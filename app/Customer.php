<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model {
    $value=DB::table('tblcustomer')->orderBy('customerid', 'asc')->get();
    return $value;
}
?>