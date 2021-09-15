<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(120)->create()->each(function(Product $product){ //Por cada producto que se crea, se agregan 4 imagenes a ese producto
            Image::factory(4)->create([
                'imageable_id'=> $product->id,
                'imageable_type'=> Product::class
            ]);
        });
    }
}
