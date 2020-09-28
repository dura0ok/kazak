<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{

    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', ['pages' => $pages]);
    }


    public function create()
    {
        return view('admin.pages.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100|regex:/^[a-z0-9-]+$/',
            'content' => 'required',
        ]);
        $page = new Page();
        $page->fill($request->all());
        $page->save();
        return Redirect::route('admin.pages.pages.index');
    }


    public function show(Page $page)
    {
        return view('admin.pages.show', ['page' => $page]);
    }


    public function edit(Page $page)
    {
        return view('admin.pages.edit', ['page' => $page]);
    }


    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|max:100|regex:/^[a-z0-9-]+$/',
            'content' => 'required',
        ]);
        $page->fill($request->all());
        $page->save();
        return Redirect::route('admin.pages.pages.index');
    }


    public function destroy(Page $page)
    {
        $page->delete();
        return Redirect::route('admin.pages.pages.index');
    }

    public function uploadImage(Request $request){

        if (!$request->has('file-0')){
            return response()->json(['statusCode' => 500, 'errorMessage' => 'Картинка не загружена, не могу найти file-0']);
        }
        $image = new Gallery();
        $image->path = $request->file('file-0')->store('gallery', 'public');
        $image->title = pathinfo($image->path)['filename'];
        $image->save();
        return response()->json(['result' => [['url' => asset('storage/'.$image->path), 'name' => 'asd', 'size' => '561276']]]);
    }
}
