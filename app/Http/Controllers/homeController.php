<?php

namespace App\Http\Controllers;
use App\Models\movie;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){

        $movies = movie::all();

        
        $data = [
            "movies" => $movies
        ];

        return view("home", $data);
    }
}
