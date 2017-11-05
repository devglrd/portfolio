<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticsController extends Controller
{
    public function home(){
        $route_current_home = "";
        return view('app.entities.home', compact('route_current_home'));
    }
}
