<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder; //Llamamos a builder para hacer consultas en eloquent
use App\Models\Product;
use App\Models\Color;


class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //Esta consulta trae todos los productos que tengan color y no se sepa el tamaño
       $products=  Product::wherehas('subcategory',function( Builder $query){ //Permite hacer consultas a las relaciones
            $query->where('color',true)
                    ->where('size',false);
        })->get();
        //Asignamos los colores a los productos y la cantidad ej. hay 5 de x producto en color white
        foreach ($products as $product){
            $product->colors()->attach([
                1 =>[
                    'quantity' =>10
                ],
                2 =>[
                    'quantity'=>10
                ],
                3 =>[
                    'quantity'=>10
                ],
                4 =>[
                    'quantity'=>10
                ]
            ]);
        }
    }

}
