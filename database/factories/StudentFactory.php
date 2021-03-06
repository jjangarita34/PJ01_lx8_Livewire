<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'mail' => $this->faker->name,
			'phone' => $this->faker->name,
        ];
    }
}
