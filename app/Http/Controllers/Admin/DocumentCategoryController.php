<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DocumentCategoryController extends Controller
{

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $documentCategory = DocumentCategory::all();
        return view('admin.documentCategory.index', ['documentCategory' => $documentCategory]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.documentCategory.create');
    }


    public function store(Request $request)
    {
        $documentCategory = new DocumentCategory($request->validate([
            'title' => 'required|max:255',
        ]));
        $documentCategory->save();
        return Redirect::route('documentCategory.index');
    }


    public function show(DocumentCategory $documentCategory)
    {
        //
    }


    public function edit(DocumentCategory $documentCategory)
    {
        return view('admin.documentCategory.edit', ['category' => $documentCategory]);
    }


    public function update(Request $request, DocumentCategory $documentCategory)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);
        $documentCategory->update(['title' => $request->get('title')]);
        return Redirect::route('documentCategory.index');
    }


    public function destroy(DocumentCategory $documentCategory)
    {
        DocumentCategory::destroy($documentCategory->id);
        return Redirect::route('documentCategory.index');
    }
}
