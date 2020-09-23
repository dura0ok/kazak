<?php

namespace App\Http\Controllers;

use App\Models\Slide;

class IndexController extends Controller
{
    public function index(){
        $slides = Slide::all();
        return view("index.main", ['slides' => $slides]);
    }
}
