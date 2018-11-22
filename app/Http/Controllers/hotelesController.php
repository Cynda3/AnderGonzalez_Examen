<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class hotelesController extends Controller
{
    public function mostrar(){

    	$hotels = Hotel::all();
    	foreach ($hotels as $hotel) {
	    	if ($hotel->categoria == 1 ) {
	    		$hoteles = array();
	    		array_push($hoteles, $hotel);
	    	}
    	}
    	return view('hotel/index', ['hotels' => $hoteles]);
    }
}
