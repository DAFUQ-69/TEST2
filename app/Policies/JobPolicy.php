<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    public function check(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
    }
}
