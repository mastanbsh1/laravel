<?php

namespace App\Http\Controllers;

use App\RoomsList;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index(){
		$roomsList = RoomsList::get();
    return view('rooms')->with('roomlist', $roomsList);
   }

	public function getSearch(){
    	return view('search');
   }

}
