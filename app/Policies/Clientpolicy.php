<?php

namespace App\Policies;

use App\Models\Client;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class Clientpolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"||$this->hasPermission($user, 'read');
    }

    public function view(User $user, Client $Client): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"||$this->hasPermission($user, 'read');
    }

    public function create(User $user): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"|| $this->hasPermission($user, 'create');
    }
    public function update(User $user, Client $Client): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"|| $this->hasPermission($user, 'update');
    }

    public function delete(User $user, Client $Client): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"|| $this->hasPermission($user, 'delete');
    }

    public function restore(User $user, Client $Client): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"|| $this->hasPermission($user, 'restore');
    }
    public function forceDelete(User $user, Client $Client): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr"|| $this->hasPermission($user, 'forceDelete');
    }

    private function hasPermission(User $user, string $permission): bool
    {       
        $authenticatedRoles = json_decode($user->permissions, true);

        if ($authenticatedRoles !== null) {
            $arraykeys = array_keys($authenticatedRoles);
            $data = array_values($arraykeys);

            if (in_array('Client', $data)) {
                $authenticatedRoles = $authenticatedRoles['Client'];

                return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
