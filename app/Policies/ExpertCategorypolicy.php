<?php

namespace App\Policies;

use App\Models\ExpertCategory;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ExpertCategorypolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"||$this->hasPermission($user, 'read');
    }

    public function view(User $user, ExpertCategory $Client): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"||$this->hasPermission($user, 'read');
    }

    public function create(User $user): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"|| $this->hasPermission($user, 'create');
    }
    public function update(User $user, ExpertCategory $Client): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"|| $this->hasPermission($user, 'update');
    }

    public function delete(User $user, ExpertCategory $Client): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"|| $this->hasPermission($user, 'delete');
    }

    public function restore(User $user, ExpertCategory $Client): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"|| $this->hasPermission($user, 'restore');
    }
    public function forceDelete(User $user, ExpertCategory $Client): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"|| $this->hasPermission($user, 'forceDelete');
    }

    private function hasPermission(User $user, string $permission): bool
    {       
        // $authenticatedRoles = json_decode($user->permissions, true);
        // $arraykeys = array_keys($authenticatedRoles);
        // $data = array_values($arraykeys);
        // if(in_array('ExpertCategory', $data))
        // {
        //     $authenticatedRoles = $authenticatedRoles['ExpertCategory'];
        //     return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
        // }
        // else{
        //     return false;
        // }
        $authenticatedRoles = json_decode($user->permissions, true);

        if ($authenticatedRoles !== null) {
            $arraykeys = array_keys($authenticatedRoles);
            $data = array_values($arraykeys);

            if (in_array('ExpertCategory', $data)) {
                $authenticatedRoles = $authenticatedRoles['ExpertCategory'];

                return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
