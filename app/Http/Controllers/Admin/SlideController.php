<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Slide;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SlideController extends Controller
{

    public function index()
    {
        $slides = Slide::all();
        return view('admin.slides.index', ['slides' => $slides]);
    }


    public function create()
    {
        $news = Article::all();
        return view('admin.slides.create', ['news' => $news]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:250',
            'image' => 'required|mimes:jpg,jpeg,png,bmp'
        ]);

        $slide = new Slide();
        $slide->fill($request->all());
        $slide->image = $request->file('image')->store('slides', 'public');
        $slide->save();
        return Redirect::route('slides.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Slide $slide
     * @return Response
     */
    public function show(Slide $slide)
    {

    }

    /**
     * @param Slide $slide
     * @return Application|Factory|View
     */
    public function edit(Slide $slide)
    {
        $news = Article::all();
        return view('admin.slides.edit', ['news' => $news, 'slide' => $slide]);
    }


    public function update(Request $request, Slide $slide)
    {
        $slide->fill($request->all());
        if ($request->has('image')) {
            $this->deleteSlideImage($slide);
            $slide->image = $request->file('image')->store('slides', 'public');
        }
        $slide->save();
        return Redirect::route('slides.index');
    }

    private function deleteSlideImage(Slide $slide)
    {
        Storage::disk('public')->delete($slide->image);
    }

    /**
     * @param Slide $slide
     * @return RedirectResponse
     */
    public function destroy(Slide $slide)
    {
        $this->deleteSlideImage($slide);
        Slide::destroy($slide->id);
        return Redirect::route('slides.index');
    }
}
