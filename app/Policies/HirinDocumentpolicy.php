<?php

namespace App\Policies;

use App\Models\HirinDocument;
use App\Models\User;
use Illuminate\Auth\Access\Response;

//
class HirinDocumentpolicy
{
    public function viewAny(User $user): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'read');
    }

    public function view(User $user, HirinDocument $career): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'read');
    }

    public function create(User $user): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'create');
    }
    public function update(User $user, HirinDocument $career): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'update');
    }

    public function delete(User $user, HirinDocument $career): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'delete');
    }

    public function restore(User $user, HirinDocument $career): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'restore');
    }
    public function forceDelete(User $user, HirinDocument $career): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'forceDelete');
    }

    private function hasPermission(User $user, string $permission): bool
    {
        // $authenticatedRoles =  json_decode($user->permissions, true);
        // \Log::info('$authenticatedRoles=============================');
        // // \Log::info($authenticatedRoles);
        // $arraykeys = array_keys($authenticatedRoles);
        // \Log::info('$$arraykeys******Expert******************8');
        // \Log::info($arraykeys);
        // $data = array_values($arraykeys);
        // if (in_array('HirinDocument', $data)) 
        // {   
            
        //     $authenticatedRoles = $authenticatedRoles['HirinDocument'];
        //     return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
        // }
        // else{
        //     return false;
        // }
        ///
        $authenticatedRoles = json_decode($user->permissions, true);

        if ($authenticatedRoles !== null) {
    
            $arraykeys = array_keys($authenticatedRoles);
            $data = array_values($arraykeys);
    
            if (in_array('HirinDocument', $data)) {
                $authenticatedRoles = $authenticatedRoles['HirinDocument'];
    
                return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }
}