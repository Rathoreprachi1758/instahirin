<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\Response;

class Userpolicy
{

    public function viewAny(User $user): bool
    {    
        // return $user->roles === "admin"||  $user->roles === "Hr" ||$user->roles === "sales" ||$user->roles === "marketing" ||$user->roles === "finance" ||$user->roles === "payroll";
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
        
    }

    public function view(User $user, User $model): bool
    {
        // return $user->roles === "admin"||  $user->roles === "Hr" ||$user->roles === "sales" ||$user->roles === "marketing" ||$user->roles === "finance" ||$user->roles === "payroll";
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    public function create(User $user): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    public function update(User $user, User $model): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    public function delete(User $user, User $model): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }


    public function restore(User $user, User $model): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    public function forceDelete(User $user, User $model): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }
}
