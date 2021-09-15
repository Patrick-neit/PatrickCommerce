<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // Permite convertir cadenas en slugs
use PhpParser\Node\Stmt\Foreach_;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Celulares y tablets',
                'slug' => Str::slug('Celulares y tablets') ,                        //Urls amigables
                'icon'=> 'fas fa-tablet-alt'
            ],

            [
                'name' => 'Tv,s Audio y Video',
                'slug' => Str::slug('Tv,s Audio y Video') ,                        //Urls amigables
                'icon'=> 'fas fa-tv'
            ],

            [
                'name' => 'Consolas y VideoJuegos',
                'slug' => Str::slug('Consolas y VideoJuegos') ,                        //Urls amigables
                'icon' => 'fas fa-gamepad'
            ],

            [
                'name' => 'Computacion',
                'slug' => Str::slug('Computacion') ,                        //Urls amigables
                'icon' => 'fas fa-network-wired'
            ],

            [
                'name' => 'Moda',
                'slug' => Str::slug('Moda') ,                        //Urls amigables
                'icon' => 'fab fa-modx'
            ]
        ];

        foreach ($categories as $category){
          $category =  Category::factory(1)-> create($category)->first(); //Creamos con factory 1 por cada vez y accedemos al id del primer reg

            $brands = Brand::factory(4)->create();
            foreach ($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}
