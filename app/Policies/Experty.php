<?php

namespace App\Policies;

use App\Models\Experty;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class Expertypolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'read');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Experty $experty): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'read');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'read');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Experty $experty): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'read');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Experty $experty): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'read');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Experty $experty): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'read');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Experty $experty): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'read');
    }
    //
    private function hasPermission(User $user, string $permission): bool
    {
        //     $authenticatedRoles =  json_decode($user->permissions, true);
        //     \Log::info('$authenticatedRoles=============================');
        //     // \Log::info($authenticatedRoles);
        //     $arraykeys = array_keys($authenticatedRoles);
        //     \Log::info('$$arraykeys******Expert******************8');
        //     \Log::info($arraykeys);
        //     $data = array_values($arraykeys);
        //     if (in_array('Expert', $data)) 
        //     {   

        //         $authenticatedRoles = $authenticatedRoles['Expert'];
        //         return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
        //     }
        //     else{
        //         return false;
        //     }
        // }
        $authenticatedRoles = json_decode($user->permissions, true);

        if ($authenticatedRoles !== null) {
            $arraykeys = array_keys($authenticatedRoles);
            $data = array_values($arraykeys);

            if (in_array('Experty', $data)) {
                $authenticatedRoles = $authenticatedRoles['Experty'];

                return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
