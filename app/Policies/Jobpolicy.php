<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

// class Jobpolicy
// {
//     /**
//      * Determine whether the user can view any models.
//      */
//     public function viewAny(User $user): bool
//     {
//         return $user->roles==='Hr'|| $user->roles=== 'admin';
//     }

//     /**
//      * Determine whether the user can view the model.
//      */
//     public function view(User $user, Job $job): bool
//     {
//         return $user->roles==='Hr'|| $user->roles=== 'admin';
//     }

//     /**
//      * Determine whether the user can create models.
//      */
//     public function create(User $user): bool
//     {
//         return $user->roles==='Hr'|| $user->roles=== 'admin';
//     }

//     /**
//      * Determine whether the user can update the model.
//      */
//     public function update(User $user, Job $job): bool
//     {
//         return $user->roles==='Hr'|| $user->roles=== 'admin';
//     }

//     /**
//      * Determine whether the user can delete the model.
//      */
//     public function delete(User $user, Job $job): bool
//     {
//         return $user->roles==='Hr'|| $user->roles=== 'admin';
//     }

//     /**
//      * Determine whether the user can restore the model.
//      */
//     public function restore(User $user, Job $job): bool
//     {
//         return $user->roles==='Hr'|| $user->roles=== 'admin';
//     }

//     /**
//      * Determine whether the user can permanently delete the model.
//      */
//     public function forceDelete(User $user, Job $job): bool
//     {
//         return $user->roles==='Hr'|| $user->roles=== 'admin';
//     }
// }
class Jobpolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'read');
    }

    public function view(User $user, Job $Job): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'read');
    }

    public function create(User $user): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'create');
    }
    public function update(User $user, Job $Job): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'update');
    }

    public function delete(User $user, Job $Job): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $user->roles === "Hr" || $this->hasPermission($user, 'delete');
    }

    public function restore(User $user, Job $Job): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'restore');
    }
    public function forceDelete(User $user, Job $Job): bool
    {
        return $user->roles === "admin" || $user->roles === "Hr" || $this->hasPermission($user, 'forceDelete');
    }

    private function hasPermission(User $user, string $permission): bool
    {

        // $authenticatedRoles = json_decode($user->permissions, true);
        // \Log::info('$authenticatedRoles=============================');
        // \Log::info($authenticatedRoles);
        // return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
        // $authenticatedRoles = json_decode($user->permissions, true);
        // \Log::info('$authenticatedRoles=============================');
        // \Log::info($authenticatedRoles);
        // $arraykeys = array_keys($authenticatedRoles);
        // \Log::info('$$arraykeys************************8');
        // \Log::info($arraykeys);
        // $valuesArray = array_values($arraykeys);
        // \Log::info('$$valuesArray&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&');
        // // \Log::info($valuesArray[1]);
        // $key = [];
        // foreach ($valuesArray as $key => $value) {
        //     //  $key = $value;
        //     \Log::info('===========Job $key============');
        //     \Log::info($key);
        //     \Log::info('===========Job $value============');
        //     \Log::info($value);
        //     if ($value === 'Job') {
        //         $authenticatedRoles = $authenticatedRoles[$value];
        //         \Log::info('===========This is job $authenticatedRoles============');
        //         // $authenticatedRoles = $authenticatedRoles[$value];
        //         \Log::info($authenticatedRoles);
        //         \Log::info('===========This is job $authenticatedRoles============');
        //         return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
        //     }
        //     else{
        //         return false;
        //     }

        //     //  \Log::info($authenticatedRoles);
        //     // if(isset($key))
        //     // {
        //     //     $authenticatedRoles = $authenticatedRoles[$key];
        //     // }
        //     // return false;
        $authenticatedRoles = json_decode($user->permissions, true);
        if ($authenticatedRoles !== null) {
            $arraykeys = array_keys($authenticatedRoles);
            $data = array_values($arraykeys);
            if (in_array('Job', $data)) {
                $authenticatedRoles = $authenticatedRoles['Job'];
                return isset($authenticatedRoles[$permission]) && $authenticatedRoles[$permission] === true;
            } else {
                return false;
            }
        } else {
            return false;
        }

        
    }
}
