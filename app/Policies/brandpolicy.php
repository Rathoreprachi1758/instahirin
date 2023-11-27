<?php

namespace App\Policies;

use App\Models\User;
use App\Models\brand;

class BrandPolicy
{
    public function viewAny(User $user): bool
    {
        // return $this->hasPermission($user, 'read');
        return false;
    }

    public function view(User $user, brand $career): bool
    {
        return false;
    }

    public function create(User $user): bool
    {
        return false;
    }
    public function update(User $user, brand $career): bool
    {
        return false;
    }

    public function delete(User $user, brand $career): bool
    {
        return false;
    }

    public function restore(User $user, brand $career): bool
    {
        return false;
    }
    public function forceDelete(User $user, brand $career): bool
    {
        return false;
    }

    private function hasPermission(User $user, string $permission): bool
    {
        // $authenticatedRoles = json_decode($user->permissions, true);
        // return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
        $authenticatedRoles = json_decode($user->permissions, true);

        if ($authenticatedRoles !== null) {
            $arraykeys = array_keys($authenticatedRoles);
            $data = array_values($arraykeys);

            if (in_array('brand', $data)) {
                $authenticatedRoles = $authenticatedRoles['brand'];

                return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}