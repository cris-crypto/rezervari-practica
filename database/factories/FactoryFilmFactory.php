<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    
    public function definition(): array
{
    return [
        'titlu' => $this->faker->sentence(3),
        'gen' => $this->faker->word(),
        'an_lansare' => $this->faker->year(),
    ];
}

    /**
     * Indicate that the film is a classic.
     */
    public function classic(): static
    {
        return $this->state(fn (array $attributes) => [
            'an_lansare' => $this->faker->year('-50 years'),
        ]);
    }       



    /**
     * Indicate that the film is a recent release.
     */
    public function recent(): static
{
        return $this->state(fn (array $attributes) => [
            'an_lansare' => $this->faker->year('-1 year'),
        ]);                                                             

}
}