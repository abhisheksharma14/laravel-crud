<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Images extends Model
{
    protected $table = 'images';
    protected $fillable = ["image", "hue"];
    // Get all Images
    public function index()
	{
	    $images = Images::all();
	    return $images;
	}

	public function random()
	{
		$images = Images::inRandomOrder()
                ->offset(0)
                ->limit(25)
                ->get();
        return $images;
	}

	public function searchInRange($upper, $lower)
	{
		$images = Images::where('hue', '<=', $upper)
                ->where('hue', '>=', $lower)
                ->get();
        return $images;
	}

	// Insert Single Image
    public function store($name, $hue)
	{
	    $image = new Images();
	    $image->image = $name;
	    $image->hue = $hue;
	    if($image->save()){
	        return true;
	    }
	}

	// Update single Image
	// public function update(Request $request, Images $image)
	// {
	//     if($image->fill($request->all())->save()){
	//         return true;
	//     }
	// }

	// Get single image
	public function show(Images $image)
	{
	    return $image;
	}

	// Delete single image
	// public function destroy(Images $image)
	// {
	//     if($image->delete()){
	//         return true;
	//     }
	// }
}




