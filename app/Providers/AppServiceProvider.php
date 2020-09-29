<?php

namespace App\Providers;


use App\Models\MenuItem;
use App\Services\Tree;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.admin.template', function ($view) {
            $view->with('user', auth()->user());
        });
        $treeService = new Tree(MenuItem::orderBy('sort')->with('descendants')->get()->toArray());
        view()->composer('layouts.base.template', function ($view) use ($treeService) {
            $view->with('menu', $treeService->build(0));
        });
    }
}
