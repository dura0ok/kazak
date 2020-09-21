<?php

namespace App\Http\Controllers;

use App\Models\AdditionalImage;
use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        //
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'text' => 'required',
            'mainImage' => 'required|mimes:jpg,jpeg,png,bmp',
            'additionalImages' => 'required_if:mimes:jpg,jpeg,png,bmp',
            'date' => 'required|date|date_format:Y-m-d'
        ]);
        $article = new Article();
        $article->fill($request->all());
        $article->image = $request->file('mainImage')->store('newsImages', 'public');
        $article->save();
        // additional images creating
        if($request->hasFile('additionalImages')) {
            foreach($request->file('additionalImages') as $file) {
                $path = $file->store('additionalImages', 'public');
                $additional = new AdditionalImage(['name' => $path, 'article_id' => $article->id]);
                $article->additionalImages()->save($additional);
            }
        }
        return Redirect::route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id)
    {
        //
    }
}
