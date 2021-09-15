<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name= $this->faker->sentence(2); //Faker llena con una sentencia al campo name de la tabla products
        $subcategory = Subcategory::all()->random(); //Llamamos al modelo subC y le decimos que elija un id al azar
        $category = $subcategory->category;

        $brand = $category->brands->random(); //Recuperamos el cualquier id de la categoria
        if ($subcategory->color){
            $quantity= null;
        }else{
            $quantity= 15;
        }


        return [
            'name'=> $name,
            'slug'=> Str::slug($name),
            'description'=> $this->faker->text(),
            'price'=> $this->faker->randomElement([19.99,49.99,99,99]),
            'quantity'=> $quantity,
            'status'=> 2,
            'subcategory_id'=> $subcategory->id,
            'brand_id'=> $brand->id,
        ];
    }
}
