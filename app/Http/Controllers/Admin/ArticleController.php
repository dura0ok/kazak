<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdditionalImage;
use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $news = Article::with('additionalImages')->get();
        return view('admin.news.index', ['news' => $news]);
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
            'additionalImages.*' => 'nullable|mimes:jpg,jpeg,png,bmp',
            'date' => 'required|date|date_format:Y-m-d'
        ]);
        $article = new Article();
        $article->fill($request->all());
        $article->image = $request->file('mainImage')->store('newsImages', 'public');
        $article->save();
        // additional images creating
        if($request->hasFile('additionalImages')) {
            $this->uploadAttachments($request, $article);
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


    public function edit(int $id)
    {
        $article = Article::find($id);
        return view('admin.news.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'nullable|max:255',
            'mainImage' => 'nullable|mimes:jpg,jpeg,png,bmp',
            'additionalImages.*' => 'nullable|mimes:jpg,jpeg,png,bmp',
            'date' => 'nullable|date:date_format:Y-m-d'
        ]);
        $article = Article::find($id);
        $article->fill($request->all());
        if($request->has('mainImage')){
            $this->deleteArticleImage($article);
            $article->image = $request->file('mainImage')->store('newsImages', 'public');
        }
        $article->save();
        if($request->has('additionalImages')){
            $this->deleteAttachments($article);
            AdditionalImage::where('article_id', $article->id)->delete();
            $this->uploadAttachments($request, $article);
        }
        return Redirect::route('news.index');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $article = Article::find($id);
        // lets delete additional images
        $this->deleteAttachments($article);
        // delete main image
        $this->deleteArticleImage($article);

        Article::destroy($id);
        return Redirect::back();
    }

    /**
     * @param Article $article
     */
    private function deleteAttachments(Article $article): void{
        $images = AdditionalImage::where('article_id', $article->id)->pluck('name');
        foreach ($images as $image){
            Storage::disk('public')->delete($image);
        }
    }

    /**
     * @param Article $article
     */
    private function deleteArticleImage(Article $article): void{
        Storage::disk('public')->delete($article->image);
    }

    /**
     * @param Request $request
     * @param Article $article
     */
    public function uploadAttachments(Request $request, Article $article): void
    {
        foreach ($request->file('additionalImages') as $file) {
            $path = $file->store('additionalImages', 'public');
            $additional = new AdditionalImage(['name' => $path, 'article_id' => $article->id]);
            $article->additionalImages()->save($additional);
        }
    }
}
