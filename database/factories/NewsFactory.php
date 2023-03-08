<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<News>
 */
class NewsFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->image(null, 640, 480),
            'title' => $this->faker->text(200),
            'content' => $this->faker->text(300),
            'author' => $this->faker->name('male'),
            'created_at'=>$this->faker->date()
        ];
    }
}
