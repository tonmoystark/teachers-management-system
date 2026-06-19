<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'email' => fake()->email(),
            'role' => fake()->randomElement(
                [
                    'Principal',
                    'Vice Principal',
                    'Head Teacher',
                    'Assistant Head Teacher',
                    'Senior Teacher',
                    'Assistant Teacher',
                    'Lecturer',
                    'Senior Lecturer',
                    'Associate Professor',
                    'Professor',
                    'Subject Coordinator',
                    'Class Teacher',
                    'Teaching Assistant',
                    'Academic Coordinator',
                    'Department Head',
                ]
            ),
            'age' => fake()->numberBetween(20, 60),
            'gender' => fake()->randomElement(['M', 'F']),
        ];
    }
}
