<?php

namespace Database\Seeders;

use App\Models\MenuItem;
use Illuminate\Database\Seeder;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menuitem::create( [
            'id'=>1,
            'title'=>'Главная',
            'url'=>'/',
            'parent_id'=>0,
            'is_url_public'=>false
        ] );



        Menuitem::create( [
            'id'=>2,
            'title'=>'Новости',
            'url'=>'pages/news',
            'parent_id'=>0,
            'is_url_public'=>false
        ] );



        Menuitem::create( [
            'id'=>3,
            'title'=>'Атаман',
            'url'=>'pages/ataman',
            'parent_id'=>0,
            'is_url_public'=>false
        ] );



        Menuitem::create( [
            'id'=>4,
            'title'=>'Документы',
            'url'=>'pages/documents',
            'parent_id'=>0,
            'is_url_public'=>false
        ] );



        Menuitem::create( [
            'id'=>5,
            'title'=>'Контакты',
            'url'=>'pages/contacts',
            'parent_id'=>0,
            'is_url_public'=>false
        ] );



        Menuitem::create( [
            'id'=>6,
            'title'=>'Социальные сети',
            'url'=>'pages/networks',
            'parent_id'=>0,
            'is_url_public'=>false
        ] );
    }
}
