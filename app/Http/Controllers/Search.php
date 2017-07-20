<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;
use DB;
class Search extends Controller
{
    public function index()
    {
    	// $images = Images::index();
        // print_r($images);
        $images = new Images();
        $random = $images->searchInRange(0, 100);
        return view('search', ['images'=> $random]);
    }

    public function searchInRange($lower, $upper)
    {
    	$images = new Images();
    	$lower = (isset($lower))?$lower:0;
    	$upper = (isset($upper))?$upper:0;
        $result = $images->searchInRange($upper, $lower);
        return json_encode(array("response"=>1, "result"=>$result));
    }

}
