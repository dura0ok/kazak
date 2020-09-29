<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{

    public function index()
    {
        $gallery = Gallery::all();
        return view('admin.gallery.index', ['gallery' => $gallery]);
    }


    public function create()
    {
        return view('admin.gallery.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'path' => 'required|mimes:jpg,jpeg,png,bmp'
        ]);
        $gallery = new Gallery();
        $gallery->fill($request->all());
        $gallery->path = $request->file('path')->store('gallery', 'public');
        $gallery->save();
        return Redirect::route('gallery.index');
    }


    public function show(Gallery $gallery)
    {
        //
    }


    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', ['galleryImage' => $gallery]);
    }

    public function update(Request $request, Gallery $gallery)
    {
        $gallery->fill($request->all());
        if ($request->has('path')){
            $this->deleteGalleryImage($gallery);
            $gallery->path = $request->file('path')->store('gallery', 'public');
        }
        $gallery->save();
        return Redirect::route('gallery.index');
    }

    public function deleteGalleryImage(Gallery $gallery){
        Storage::disk('public')->delete($gallery->path);
    }

    public function destroy(Gallery $gallery)
    {
        $this->deleteGalleryImage($gallery);
        Gallery::destroy($gallery->id);
        return Redirect::route('gallery.index');
    }
}
