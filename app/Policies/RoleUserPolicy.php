<?php

namespace App\Policies;

use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoleUserPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        $permissions = getPermissionOfUser();

        $this->roles = $permissions['roles'];
        $this->permissions = $permissions['permissions'];
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return in_array('viewAny-roleUser', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RoleUser  $roleUser
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, RoleUser $roleUser)
    {
        return in_array('view-roleUser', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-roleUser', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RoleUser  $roleUser
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, RoleUser $roleUser)
    {
        return in_array('update-roleUser', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RoleUser  $roleUser
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, RoleUser $roleUser)
    {
        return in_array('delete-roleUser', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RoleUser  $roleUser
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, RoleUser $roleUser)
    {
        return in_array('restore-roleUser', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RoleUser  $roleUser
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, RoleUser $roleUser)
    {
        return in_array('forceDelete-roleUser', $this->permissions);
    }
}
