<?php

namespace Database\Factories;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        'image'=> 'subcategories/' . $this->faker->image('public/storage/subcategories',640,480,null,false) //Pedimos a faker que descargue imagens para nuestra categorias y definimos su tamaño

        ];
    }
}
