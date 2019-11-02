<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class SearchController extends Controller
{
   
		public function postSearch(Request $request)
       {
		   $city           = $request->input('uname');
		   $roomType            = $request->input('roomtype'); 
           $result = Room::where('locationid', $city)
			->where('categoryid', $roomType)
			->get();
			return view('search',$result);
			 
       }
}



    
        

       
 
