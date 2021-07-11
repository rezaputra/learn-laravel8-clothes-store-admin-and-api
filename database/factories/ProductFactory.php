<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => $this->faker->sentence($nbWords = 4, $variableNbWords = true),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph($nbSentences = 4, $variableNbSentences = true),
            'price' => (string)$this->faker->numerify('######'),
            'quantity' => $this->faker->randomDigit(),
        ];
    }
}
