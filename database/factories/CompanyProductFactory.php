<?php

namespace Database\Factories;

use App\Models\CompanyProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\companyproduct>
 */
class CompanyProductFactory extends Factory
{
    protected $model = CompanyProduct::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => fake()->numberBetween(1,30),
            'name' => fake()->name(),
            'image' => fake()->image(),
            'price' => fake()->numberBetween(100,1000)
        ];
    }
}
