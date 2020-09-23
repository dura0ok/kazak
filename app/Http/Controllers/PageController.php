<?php

namespace App\Http\Controllers;

use App\Models\Article;

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

    public function news(){
        $news = Article::all();
        return view('pages.news', ['news' => $news]);
    }

    public function article($id){
        $article = Article::with('additionalImages')->where('id', $id)->first();
        return view('pages.article', ['article' => $article]);
    }
}
