<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to a employer ', function () {
    //AAA arrange, act, assert
    //arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(
        [
            'employer_id' => $employer->id
        ]
    );

    //act and assert
    expect($job->employer->is($employer))->toBeTrue();

});
it('can have tags', function () {
    //AAA arrange, act, assert
    $job = Job::factory()->create();
    $job->tag('frontend');
    expect($job->tags)->toHaveCount(1);
});
