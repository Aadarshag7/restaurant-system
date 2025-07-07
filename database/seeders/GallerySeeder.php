<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::insert([
         [
            'photo'=>'admin/img/gallery/gallery-1.jpg',
         ],
         [
            'photo'=>'admin/img/gallery/gallery-2,jpg',
         ],
         [
            'photo'=>'admin/img/gallery/gallery-3.jpg',
         ],
         [
            'photo'=>'admin/img/gallery/gallery-4.jpg',

         ],
         [
            'photo'=>'admin/img/gallery/gallery-5.jpg',

         ],
         [
            'photo'=>'admin/img/gallery/gallery-6.jpg',

         ],
         [
            'photo'=>'admin/img/gallery/gallery-7.jpg',
         ],
         [
            'photo'=>'admin/img/gallery/gallery-8.jpg',
         ]
            
        
         
         ]);
    }
}
