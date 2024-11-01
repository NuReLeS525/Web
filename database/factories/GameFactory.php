<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Game;

/**
 * @extends Factory<Game>
 */
//@extends Factory<Game>
class GameFactory extends Factory
{
    public function definition(): array
    {
        return [
//            'name' => ucfirst($this->faker-words(2, true)),
            'img' => $this->faker->company(),
//            'name' => $this->faker->name(),
            'name' => $this->faker->company(),
        ];
    }
}
