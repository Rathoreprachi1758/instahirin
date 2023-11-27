<?php

namespace App\Policies;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class Leadpolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles ==='Hr'||$user->roles=== 'admin'||$this->hasPermission($user, 'read');
    }

    public function view(User $user, Lead $career): bool
    {
        return $user->roles ==='Hr'||$user->roles=== 'admin'|| $this->hasPermission($user, 'read');
    }

    public function create(User $user): bool
    {
        return $user->roles ==='Hr'||$user->roles=== 'admin'|| $this->hasPermission($user, 'create');
    }
    public function update(User $user, Lead $career): bool
    {
        return $user->roles ==='Hr'||$user->roles=== 'admin'|| $this->hasPermission($user, 'update');
    }

    public function delete(User $user, Lead $career): bool
    {
        return $user->roles ==='Hr'||$user->roles=== 'admin'|| $this->hasPermission($user, 'delete');
    }

    public function restore(User $user, Lead $career): bool
    {
        return $user->roles ==='Hr'||$user->roles=== 'admin'|| $this->hasPermission($user, 'restore');
    }
    public function forceDelete(User $user, Lead $career): bool
    {
        return $user->roles ==='Hr'||$user->roles=== 'admin'|| $this->hasPermission($user, 'forceDelete');
    }

    private function hasPermission(User $user, string $permission): bool
    {   
        // $authenticatedRoles = json_decode($user->permissions, true);
        // // $authenticatedRoles = $authenticatedRoles['Job'];
        // \Log::info('$authenticatedRoles');
        // \Log::info($authenticatedRoles);
        //  return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
        $authenticatedRoles = json_decode($user->permissions, true);
        if ($authenticatedRoles !== null) {
            $arraykeys = array_keys($authenticatedRoles);
            $data = array_values($arraykeys);
            if (in_array('Lead', $data)) {
                $authenticatedRoles = $authenticatedRoles['Lead'];
                return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
