<?php

namespace App\Policies;

use App\Models\User;
use App\Models\HireRequest;

class HireRequestPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    ///////
    public function viewAny(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function view(User $user, HireRequest $hireRequest): bool
    {
        return $user->id === $hireRequest->user_id || $user->hasRole('admin');
    }


    public function create(User $user): bool
    {
        return $user->exists;
    }

    public function update(User $user, HireRequest $hireRequest): bool
    {
        return $user->id === $hireRequest->user_id || $user->hasRole('admin');
    }
    public function delete(User $user, HireRequest $hireRequest): bool
    {
        return $user->id === $hireRequest->user_id || $user->hasRole('admin');
    }

    public function restore(User $user, HireRequest $hireRequest): bool
    {
        return $user->id === $hireRequest->user_id || $user->hasRole('admin');
    }

    public function forceDelete(User $user, HireRequest $hireRequest): bool
    {
        return $user->hasRole('admin');
    }
}
