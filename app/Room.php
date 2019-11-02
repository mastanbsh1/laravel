<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Room
 *
 * @package App
 * @property string $room_number
 * @property integer $floor
 * @property text $description
 */
class Room extends Model
{
    
  protected $table = 'tblRooms';
   

    /**
     * Set attribute to money format
     * @param $input
     */
   
    public function rooms()
    {
        return $this->HasOne(Location::class, 'room_id')->withTrashed();
    }
	public static function citySearch($query, $searchTerm)
    {
        return $query->where('locationid', '=', '%' .$searchTerm. '%');
    }
	public static function roomTypeSearch($query, $searchTerm)
    {
        return $query->where('categoryid', '=', '%' .$searchTerm. '%');
    }
	
}
