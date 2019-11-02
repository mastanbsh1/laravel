<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table = 'tblLocation';
	 
	
{
    public static function citySearch($query, $searchTerm)
    {
        return $query->where('cityname', 'like', '%' .$searchTerm. '%');
    }
}
	 
}

