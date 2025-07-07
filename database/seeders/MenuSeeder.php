<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
[

           'name'=>'momo',
            'price'=>'100',
            'photo'=> 'admin/img/Momo_nepal.jpg',
],
     [
        'name'=>'chowmein',
        'price'=>'120',
        'photo'=> 'admin/img/chowmein.jpg',


     ],
     [
        'name'=>'pizza',
        'price'=>'150',
        'photo'=>'admin/img/pizza.jpg',
     ],
     [
        'name'=>'burger',
        'price'=>'120',
        'photo'=>'admin/img/burger.jpg',
     ]
          

     ]);
    }
}
