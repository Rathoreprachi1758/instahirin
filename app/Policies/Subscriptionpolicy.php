<?php

namespace App\Policies;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use App\Models\Role;

class Subscriptionpolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // return $user->roles==='Hr'|| $user->roles=== 'admin';
        // $userRoles = auth()->user()->roles;
        // $allowedRoles = Role::pluck("role")->toArray();

        // return in_array($userRoles, $allowedRoles);
        return $user->roles=== 'admin';
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Subscription $subscription): bool
    {
        // return $user->roles==='Hr'|| $user->roles=== 'admin';
        return $user->roles=== 'admin';
        // $userRoles = auth()->user()->roles;
        // $allowedRoles = Role::pluck("role")->toArray();

        // return in_array($userRoles, $allowedRoles);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // $userRoles = auth()->user()->roles;
        // $allowedRoles = Role::pluck("role")->toArray();

        // return in_array($userRoles, $allowedRoles);
        return $user->roles=== 'admin';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Subscription $subscription): bool
    {
        // $userRoles = auth()->user()->roles;
        // $allowedRoles = Role::pluck("role")->toArray();

        // return in_array($userRoles, $allowedRoles);

        return $user->roles=== 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Subscription $subscription): bool
    {
        // $userRoles = auth()->user()->roles;
        // $allowedRoles = Role::pluck("role")->toArray();

        // return in_array($userRoles, $allowedRoles);
        return $user->roles=== 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Subscription $subscription): bool
    {
        // $userRoles = auth()->user()->roles;
        // $allowedRoles = Role::pluck("role")->toArray();

        // return in_array($userRoles, $allowedRoles);

        return $user->roles=== 'admin';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Subscription $subscription): bool
    {
        // $userRoles = auth()->user()->roles;
        // $allowedRoles = Role::pluck("role")->toArray();

        // return in_array($userRoles, $allowedRoles);

        return $user->roles=== 'admin';
    }
}
