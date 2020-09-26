<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Statement;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class StatementController extends Controller
{

    public function index()
    {
        $statements = Statement::all();
        return view('admin.statements.index', ['statements' => $statements]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.statements.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'file' => 'required|mimes:pdf',
        ]);
        $statement = new Statement();
        $statement->fill($request->all());
        $statement->file = $request->file('file')->store('statements', 'public');
        $statement->save();
        return Redirect::route('statements.index');
    }


    public function show(Statement $statement)
    {

    }

    /**
     * @param Statement $statement
     * @return Application|Factory|View
     */
    public function edit(Statement $statement)
    {
        return view('admin.statements.edit', ['statement' => $statement]);
    }

    /**
     * @param Request $request
     * @param Statement $statement
     * @return RedirectResponse
     */
    public function update(Request $request, Statement $statement)
    {
        $statement->fill($request->all());
        if ($request->has('file')) {
            $this->deleteStatementFile($statement);
            $statement->file = $request->file('file')->store('statements', 'public');
        }
        $statement->save();
        return Redirect::route('statements.index');
    }

    /**
     * @param Statement $statement
     */
    public function deleteStatementFile(Statement $statement): void
    {
        Storage::disk('public')->delete($statement->file);
    }

    /**
     * @param Statement $statement
     * @return RedirectResponse
     */
    public function destroy(Statement $statement)
    {
        $this->deleteStatementFile($statement);
        Statement::destroy($statement->id);
        return Redirect::route('statements.index');
    }
}
