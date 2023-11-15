<?php

namespace App\Policies;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class Leadpolicy
{
    public function viewAny(User $user): bool
    {   
        return true;
    }
    public function view(User $user, Lead $lead): bool
    {
        return $user->roles === "admin";
    }
    public function create(User $user): bool
    {
        return $user->roles === "admin";
    }
    public function update(User $user, Lead $lead): bool
    {
        return $user->roles === "admin";
    }
    public function delete(User $user, Lead $lead): bool
    {
        return $user->roles === "admin";
    }
    public function restore(User $user, Lead $lead): bool
    {
        return $user->roles === "admin";
    }
    public function forceDelete(User $user, Lead $lead): bool
    {
        return $user->roles === "admin";
    }
}
