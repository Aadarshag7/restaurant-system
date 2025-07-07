<?php

namespace Database\Seeders;

use App\Models\Chef;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chef::insert([
            [
                'name'=>'Aadarsh',
                'role'=>'chef',
                'photo'=>'admin/img/chefs/chefs-1.jpg'
            ],

            [
                'name'=>'Hemanta',
                'role'=>'helper',
                'photo'=>'admin/img/chefs/chefs-2.jpg'
            ],
            [
                'name'=>'Sunil',
                'role'=>'masterchef',
                'photo'=>'admin/img/chefs/chefs-3.jpg'
            ]
            ]);
    }
}
