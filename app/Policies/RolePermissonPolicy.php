<?php

namespace App\Policies;

use App\Models\RolePermisson;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePermissonPolicy
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
        return in_array('viewAny-rolePermission', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RolePermisson  $rolePermisson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, RolePermisson $rolePermisson)
    {
        return in_array('view-rolePermission', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-rolePermission', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RolePermisson  $rolePermisson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, RolePermisson $rolePermisson)
    {
        return in_array('update-rolePermission', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RolePermisson  $rolePermisson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, RolePermisson $rolePermisson)
    {
        return in_array('delete-rolePermission', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RolePermisson  $rolePermisson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, RolePermisson $rolePermisson)
    {
        return in_array('restore-rolePermission', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RolePermisson  $rolePermisson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, RolePermisson $rolePermisson)
    {
        return in_array('forceDelete-rolePermission', $this->permissions);
    }
}
