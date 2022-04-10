<?php

namespace Database\Factories;

use App\Models\LearningPath;
use Illuminate\Database\Eloquent\Factories\Factory;

class LearningPathFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LearningPath::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(5),
            'description'=> $this->faker->paragraph(2),
            'niveau'=> $this->faker->randomElement(['easy', 'noraml', 'hard']) ,
            'logo'=> $this->faker->image(null, 640, 480),
            'grained_points'=> $this->faker->randomNumber(3,false),
            'is_premium'=> $this->faker->randomElement([1,0]),

        ];
    }
}
