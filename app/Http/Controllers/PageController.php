<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function ataman(){
        return view("pages.ataman");
    }

    public function contacts(){
        return view("pages.contacts");
    }

    public function documents(){
        return view("pages.documents");
    }

    public function networks(){
        return view("pages.networks");
    }

    public function statements(){
        return view("pages.statements");
    }
}
