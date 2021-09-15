<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder; //Llamamos a builder para hacer consultas en eloquent
use App\Models\Product;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products=  Product::wherehas('subcategory',function( Builder $query){ //Consulta si los colores y tamaños de laSubc del product estan en true y los crea
            $query->where('color',true)
                    ->where('size',true);
        })->get();
        $sizes = ['Talla L','Talla S','Talla M'];
        foreach ($products as $product){

            foreach ($sizes as $size){

                $product->sizes()->create([ //Accedemos a la relacion product-sizes y le asignamos el id y el arrayz de nombres
                    'name'=> $size
                ]);
            }
        }

    }
}
