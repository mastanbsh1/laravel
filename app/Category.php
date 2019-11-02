<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    $value=DB::table('tblcategory')->orderBy('categoryid', 'asc')->get();
    return $value;
}
?>