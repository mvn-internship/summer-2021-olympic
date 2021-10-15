<?php

namespace App\Policies;

use App\Models\Permisson;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissonPolicy
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
        return in_array('viewAny-permissionPolicy', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permisson  $permisson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Permisson $permisson)
    {
        return in_array('view-permissionPolicy', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-permissionPolicy', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permisson  $permisson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Permisson $permisson)
    {
        return in_array('update-permissionPolicy', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permisson  $permisson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Permisson $permisson)
    {
        return in_array('delete-permissionPolicy', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permisson  $permisson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Permisson $permisson)
    {
        return in_array('restore-permissionPolicy', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Permisson  $permisson
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Permisson $permisson)
    {
        return in_array('forceDelete-permissionPolicy', $this->permissions);
    }
}
