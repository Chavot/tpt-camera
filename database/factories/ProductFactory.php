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
        return [

            'name' => fake()->unique()->name(),
            'description' => fake()->text(100),
            'image' => 'https://picsum.photos/seed/'. fake()->uuid .'/96',
            'type' => fake()->randomElement(['Camera', 'Lens', 'Memory Card']) ,
            'brand' => fake()->randomElement(['Canon', 'Nikon', 'Pentax']),
            'status' => rand(0, 1),


                  ];

    }
}
