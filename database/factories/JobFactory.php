<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;


class JobFactory extends Factory
{

    public function definition(): array
    {
        return [

            // $table->string('title');
            'title' => fake()->jobTitle,

            // $table->string('salary');
            'salary' => fake()->randomElement(['$50,000 USD', '$90,000 USD', '$150,000 USD']),

            // $table->string('location');
            'location' => fake()->city,

            // $table->string('schedule')->default('Full Time');
            'schedule' => fake()->randomElement(['Part Time', 'Full Time']),

            // $table->string('url');
            'url' => fake()->url,

            // $table->boolean('featured')->default(false);
            'featured' => fake()->randomElement(['true', 'false']),

            // $table->foreignIdFor(Employer::class);
            'employer_id' => Employer::Factory(),

        ];
    }
}
