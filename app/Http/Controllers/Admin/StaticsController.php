<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticsController extends Controller
{
    public function returnGif(){

        $key = 'QpGn13Icg1MPCe53B4TLyopF5KWqWz5I';

        $url = 'http://api.giphy.com/v1/gifs/random?api_key=' . $key;

        $json = json_decode(file_get_contents($url));
        $u = $json->data->image_url;

//        $gif = $json->data->images->original->url;


        return view('admin.entities.gif')->with([
            'unique' => $u
        ]);
    }
}
