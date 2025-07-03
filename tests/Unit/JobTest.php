<?php

namespace Tests\Unit;

use App\Models\Job;
use App\Models\Employer;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JobTest extends TestCase
{
    use RefreshDatabase;


    public function a_job_can_be_created_with_factory(): void
    {
        $job = Job::factory()->create();

        $this->assertDatabaseHas('jobs', [
            'id' => $job->id,
            'title' => $job->title,
        ]);
    }


    public function a_job_belongs_to_an_employer(): void
    {
        $job = Job::factory()->create();

        $this->assertInstanceOf(Employer::class, $job->employer);
    }

    public function test_a_job_can_have_tags(): void
    {
        $job = Job::factory()->create();
        $job->tag('frontend');

        $this->assertCount(1, $job->tags);
    }
}
