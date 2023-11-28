<?php

namespace App\Policies;

use App\Models\Page;
use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\Response;

class Pagepolicy
{
    public function viewAny(User $user): bool
    {
        // return $user->roles === "admin" ||  $this->hasPermission($user, 'read');
         $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    public function view(User $user, Page $career): bool
    {
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
    public function update(User $user, Page $career): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    public function delete(User $user, Page $career): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    public function restore(User $user, Page $career): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }
    public function forceDelete(User $user, Page $career): bool
    {
        $userRoles = auth()->user()->roles;
        $allowedRoles = Role::pluck("role")->toArray();

        return in_array($userRoles, $allowedRoles);
    }

    private function hasPermission(User $user, string $permission): bool
    {
        $authenticatedRoles = json_decode($user->permissions, true);
        if ($authenticatedRoles !== null) {
            \Log::info('$authenticatedRoles=============================');
            // \Log::info($authenticatedRoles);
            $arraykeys = array_keys($authenticatedRoles);
            \Log::info('$$arraykeys******Expert******************8');
            \Log::info($arraykeys);
            $data = array_values($arraykeys);
            if (in_array('Page', $data)) {

                $authenticatedRoles = $authenticatedRoles['Page'];
                return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
            } else {
                return false;
            }


        } else {
            return false;
        }
    }
}
