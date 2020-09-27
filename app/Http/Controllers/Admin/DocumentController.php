<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\DocumentCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use PhpParser\Comment\Doc;

class DocumentController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $documents = Document::with('category')->get();
        return view('admin.documents.index', ['documents' => $documents]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $documentsCategory = DocumentCategory::all();
        return view('admin.documents.create', ['documentsCategory' => $documentsCategory]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:250',
            'file' => 'required|mimes:pdf',
            'category_id' => 'required'
        ]);
        $document = new Document();
        $document->fill($request->all());
        $document->file = $request->file('file')->store('documents', 'public');
        $document->save();
        return Redirect::route('docs.index');
    }


    public function show(Document $document)
    {
        //
    }


    /**
     * @param Document $doc
     * @return Application|Factory|View
     */
    public function edit(Document $doc)
    {
        $documentsCategory = DocumentCategory::all();
        return view('admin.documents.edit', ['document' => $doc, 'documentsCategory' => $documentsCategory]);
    }

    /**
     * @param Document $document
     */
    public function deleteDocFile(Document $document): void{
        Storage::disk('public')->delete($document->file);
    }

    /**
     * @param Request $request
     * @param Document $doc
     * @return RedirectResponse
     */
    public function update(Request $request, Document $doc)
    {
        $request->validate([
            'title' => 'nullable|max:250',
            'file' => 'nullable|mimes:pdf',
        ]);
        $doc->fill($request->all());
        if($request->has('file')){
            $this->deleteDocFile($doc);
            $doc->file = $request->file('file')->store('documents', 'public');
        }
        $doc->save();
        return Redirect::route('docs.index');
    }

    /**
     * @param Document $doc
     * @return RedirectResponse
     */
    public function destroy(Document $doc)
    {
        $this->deleteDocFile($doc);
        Document::destroy($doc->id);
        return Redirect::route('docs.index');
    }
}
