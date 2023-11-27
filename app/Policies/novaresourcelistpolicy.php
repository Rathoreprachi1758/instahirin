<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;
use App\Models\novaresourcelist;
use Illuminate\Auth\Access\Response;

class novaresourcelistpolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // $data = Role::pluck("role");
        // if(in_array(auth()->user()->roles, $data)) {
        //     return true;
        // } else {
        //     return false;
        // }
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
        // return $user->roles === "admin"||  $user->roles === "Hr" ||$user->roles === "sales" ||$user->roles === "marketing" ||$user->roles === "finance" ||$user->roles === "payroll";
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, novaresourcelist $novaresourcelist): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, novaresourcelist $novaresourcelist): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, novaresourcelist $novaresourcelist): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, novaresourcelist $novaresourcelist): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, novaresourcelist $novaresourcelist): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }
}
