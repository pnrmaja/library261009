<?php

namespace Database\Factories;

use App\Models\Copy;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Copy>
 */
class CopyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'book_id' => Book::factory(),
            'hardcover' => fake()->boolean(),
            'publication' => fake()->numberBetween(1990, 2026),
            'status' => fake()->numberBetween(0, 2),
        ];
    }
}
