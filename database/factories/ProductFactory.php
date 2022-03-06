<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=4,$asText=True);
        $slug = Str::slug($product_name);
        return [
            'name'=> $product_name,
            'slug'=> $slug,
            'short_description'=> $this->faker->text(200),
            'description'=> $this->faker->text(500),
            'regular_price'=> $this->faker->numberBetween(10,500),
            'SKU'=> 'DIGI' .$this->faker->unique()->numberBetween(100, 500),  //SKU=stock keeping unit
            'stock_status' => 'instock',
            'quantity' => $this->faker->numberBetween(100,200),
            'image' => 'cake_' . $this->faker->unique()->numberBetween(1,22).'.jpg',
            'category_id' => $this->faker->numberBetween(1,5)
        ];
    }
}