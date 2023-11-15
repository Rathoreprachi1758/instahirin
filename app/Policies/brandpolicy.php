<?php

namespace App\Policies;

use App\Models\User;
use App\Models\job;
// use App\Models\Page;
class BrandPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Only allow admins to view any models
        // return $user->hasRole('admin');
        //  $user=auth()->user()->roles;
        // dd($user);
         return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, job $post2): bool
    {
        // Example: Allow the owner of the post or admins to view it
        // return $user->id === $post2->user_id || $user->hasRole('admin');
        return $user->id === $post2->user_id || (auth()->user()->roles === 'admin');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Example: Allow all authenticated users to create a Post2
        return $user->exists;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, job $post2): bool
    {
        // Example: Allow the owner of the post or admins to update it
        return $user->id === $post2->user_id || (auth()->user()->roles === 'admin');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, job $post2): bool
    {
        // Example: Allow the owner of the post or admins to delete it
        return $user->id === $post2->user_id || (auth()->user()->roles === 'admin');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, job $post2): bool
    {
        // Example: Allow the owner of the post or admins to restore it
        return $user->id === $post2->user_id || (auth()->user()->roles === 'admin');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, job $post2): bool
    {
        // Example: Allow admins to permanently delete the post
        return (auth()->user()->roles === 'admin');
    }
}
