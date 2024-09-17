<?php

use App\Models\Job;
use App\Models\Employer;

// test('example', function () {
//     expect(true)->toBeTrue();
// });

it('belongs to an employer', function () {
    // 1: Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    // 2: Act
    // 3: Assert
    // For this case Act and Assert happening at the same time
    expect($job->employer->is($employer))->toBeTrue();
});

test('job can have tags', function() {
    // Arrange
    $job = Job::factory()->create();

    // Act
    $job->tag('Frontend');

    // Assert
    expect($job->tags)->toHaveCount(1);
});
