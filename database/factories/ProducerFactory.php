<?php

namespace Database\Factories;
use App\Models\Producer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProducerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Producer::class;

    public function definition()
    {
        return [
            'name'=>$this->faker->company

        ];
    }
}
