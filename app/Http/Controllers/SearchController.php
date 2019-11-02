<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class SearchController extends Controller
{
    public function postSearch(Request $request) 
        {
            $searchTerm = $request->input('uname');
			print($searchTerm);
            $location = Location::citySearch()
            ->search($searchTerm);
            return view('search');
        }
		public function show($id)
       {
           $location = Location::find($id);
           return view('search', compact('location'));
       }
}



    
        

       
 
