<?php

namespace Database\Factories;

use App\Models\Module;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModuleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Module::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(5),
            'trainer_id'=>function () {
                return $this->faker(App\Trainer::class)->create()->id;
            },
            'description'=> $this->faker->paragraph(2),
            'niveau'=> $this->faker->randomElement(['easy', 'normal', 'hard']) ,
            'category'=> $this->faker->randomElement(['web deveploment', 'network', 'sécurity']) ,
            'image'=> $this->faker->image(null, 640, 480),
            'scop'=> $this->faker->randomElement([1,0]),
            'new'=> $this->faker->randomElement([1,0]),


        ];
    }
}
