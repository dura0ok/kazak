<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use App\Rules\MenuUrl;
use App\Services\Tree;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class MenuItemController extends Controller
{

    private function generateMenu(): array{
        $menuItems = MenuItem::all()->toArray();
        $treeService = new Tree($menuItems);
        return $treeService->build(0);
    }

    public function index()
    {
        $menu = MenuItem::orderBy('sort')->get();
        return view('admin.menuItems.index', ['menu' => $menu]);
    }


    public function create()
    {
        return view('admin.menuItems.create', ['menu' => $this->generateMenu()]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $is_url_public = (boolean)$request->get('is_url_public') ?? false;
        $request->validate([
            'title' => 'required|max:250',
            'parent_id' => 'required|numeric',
            'sort' => 'required|numeric',
            'url' => ['required', new MenuUrl($is_url_public)],
        ]);
        $item = new MenuItem();
        $item->fill($request->all());
        $item->is_url_public = $is_url_public;
        $item->save();
        return Redirect::route('menu.index');
    }


    public function show(MenuItem $menuItem)
    {
        //
    }


    public function edit(MenuItem $menu)
    {
        return view('admin.menuItems.edit', ['item' => $menu, 'menu' => $this->generateMenu()]);
    }

    /**
     * @param Request $request
     * @param MenuItem $menu
     * @return RedirectResponse
     */
    public function update(Request $request, MenuItem $menu)
    {
        $is_url_public = (boolean)$request->get('is_url_public') ?? false;
        $request->validate([
            'title' => 'required|max:250',
            'parent_id' => 'required|numeric',
            'sort' => 'required|numeric',
            'url' => ['required', new MenuUrl($is_url_public)],
        ]);
        $menu->fill($request->all());
        $menu->is_url_public = $is_url_public;
        $menu->save();
        return Redirect::route('menu.index');
    }


    public function destroy(MenuItem $menu)
    {
        // TODO доделать удаления картинок у pages у каждого menuItems
        foreach($menu->descendants as $descendant){
            MenuItem::destroy($descendant->id);
        }
        $menu->delete();
        return Redirect::route('menu.index');
    }
}
