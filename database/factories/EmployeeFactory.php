<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition(): array
    {
        return [
            'department_id' => Department::factory(),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
        ];
    }
}
