<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Foreach_;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories=[
            [   //Categoria celulares y tablets
                'category_id'=>1,
                'name' => 'Celulares y Smartphones',
                'slug'=> Str::slug('Celulares y Smartphones') ,
                'color'=> true
            ],

            [   //Categoria celulares y tablets
                'category_id'=> 1,
                'name' => 'Accesorios para Celulares',
                'slug'=> Str::slug('Accesorios para Celulares') ,

            ],

            [   //Categoria celulares y tablets
                'category_id'=> 1,
                'name' => 'Smartwatches',
                'slug'=> Str::slug('Smartwatches') ,

            ],

            [   //Tv y audio
                'category_id'=> 2,
                'name' => 'Tv y Audio',
                'slug'=> Str::slug('Tv y Audio') ,

            ],

            [   //Tv y audio
                'category_id'=> 2,
                'name' => 'Audios',
                'slug'=> Str::slug('Audios') ,

            ],
            [   //Tv y audio
                'category_id'=> 2,
                'name' => 'Audios para Autos',
                'slug'=> Str::slug('Audios para Autos') ,

            ],

            [   //Consola y videojuegos
                'category_id'=> 3,
                'name' => 'Xboxs',
                'slug'=> Str::slug('Xboxs') ,

            ],
            [   //Consola y videojuegos
                'category_id'=> 3,
                'name' => 'PlayStation',
                'slug'=> Str::slug('Play Station') ,

            ],
            [   //Consola y videojuegos
                'category_id'=> 3,
                'name' => 'Pc Games',
                'slug'=> Str::slug('Pc Games') ,

            ],
            [   //Consola y videojuegos
                'category_id'=> 3,
                'name' => 'Nintendos',
                'slug'=> Str::slug('Nintendos') ,

            ],

            [   //Computacion
                'category_id'=> 4,
                'name' => 'Portatiles',
                'slug'=> Str::slug('Portatiles') ,

            ],
            [   //Computacion
                'category_id'=> 4,
                'name' => 'Pc de escritorio',
                'slug'=> Str::slug('Pc de escritorio') ,

            ],
            [   //Computacion
                'category_id'=> 4,
                'name' =>'Almacenamiento',
                'slug'=> Str::slug('Almacenamiento') ,

            ],
            [   //Computacion
                'category_id'=> 4,
                'name' => 'Accesorios de Computadoras',
                'slug'=> Str::slug('Accesorios de Computadoras') ,

            ],
            [   //Moda
                'category_id'=> 5,
                'name' => 'Mujeres',
                'slug'=> Str::slug('Mujeres') ,
                'color' => true,
                'size' =>true,

            ],
            [   //Moda
                'category_id'=> 5,
                'name' => 'Hombres',
                'slug'=> Str::slug('Hombres') ,
                'color' => true,
                'size' =>true,

            ],
            [   //Moda
                'category_id'=> 5,
                'name' => 'Lentes',
                'slug'=> Str::slug('Lentes') ,
                'color' => true,
                'size' =>true,

            ],
            [   //Moda
                'category_id'=> 5,
                'name' => 'Relojes',
                'slug'=> Str::slug('Relojes') ,
                'color' => true,
                'size' =>true,

            ],
        ];
        foreach ($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory); //Que se cree 1 subcategory por cada iteracion
        }
    }
}
