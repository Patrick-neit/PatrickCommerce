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
                'name' => 'Prendas',
                'slug' => Str::slug('Prendas') ,                        //Urls amigables
                'icon' => '<i class="fas fa-mobile-alt"></i>'
            ],

            [
                'name' => 'Accesorios',
                'slug' => Str::slug('Accesorios') ,                        //Urls amigables
                'icon' => '<i class="fas fa-tv"></i>'
            ],

           /* [
                'name' => 'Consolas y VideoJuegos',
                'slug' => Str::slug('Consolas y VideoJuegos') ,                        //Urls amigables
                'icon' => '<i class="fas fa-gamepad"></i>'
            ],

            [
                'name' => 'Computacion',
                'slug' => Str::slug('Computacion') ,                        //Urls amigables
                'icon' => '<i class="fas fa-laptop"></i>'
            ],

            [
                'name' => 'Moda',
                'slug' => Str::slug('Moda') ,                        //Urls amigables
                'icon' => '<i class="fas fa-tshirt"></i>'
            ]*/
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
