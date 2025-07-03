<?php

namespace Database\Seeders;


use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory()->count(3)->create();
        Job::factory(20)->hasAttached($tags)->create(new Sequence(
            [
                'featured' => false,
                'schedule' => 'Full Time',
            ],
            [
                'featured' => True,
                'schedule' => 'Part Time',
            ]
        ));
    }
}
