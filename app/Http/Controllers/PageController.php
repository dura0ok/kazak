<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Document;
use App\Models\DocumentCategory;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Statement;

class PageController extends Controller
{
    public function ataman()
    {
        return view("pages.ataman");
    }

    public function contacts()
    {
        return view("pages.contacts");
    }

    public function documents()
    {
        $documents = Document::all();
        $categories = DocumentCategory::all();
        return view("pages.documents", ['documentsGroups' => $documents->groupBy('category_id'), 'categories' => $categories]);
    }

    public function networks()
    {
        return view("pages.networks");
    }

    public function statements()
    {
        $statements = Statement::all();
        return view("pages.statements", ['statements' => $statements]);
    }

    public function news()
    {
        $news = Article::all();
        return view('pages.news', ['news' => $news]);
    }

    public function article($id)
    {
        $article = Article::with('additionalImages')->where('id', $id)->first();
        return view('pages.article', ['article' => $article]);
    }

    public function getPage($title){
        $page = Page::where('title', $title)->first();
        return view('pages.page', ['page' => $page]);
    }

    public function getGallery(){
        $images = Gallery::all();
        $response = ['statusCode' => 200, 'result' => []];
        foreach ($images as $image){
            $response['result'][] = ['src' => asset('storage/'.$image->path), 'name' => $image->title];
        }
        return response()->json($response);
    }
}
