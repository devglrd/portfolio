<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function profil(){
        $route_current_profil = "";
        return view('profil');
    }
    public function accueil(){
        $route_current_home= "";
        return view('welcome');
    }
    public function home(){
        $route_current_home = "";
        return view('home', compact('route_current_home'));
    }
    public function project(){
        $route_current_project = "";
        return view("project", compact('route_current_project'));
    }
}
