<?php

namespace App\Policies;

use App\Models\InvidualGroup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvidualGroupPolicy
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
        return in_array('viewAny-individualGroup', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\InvidualGroup  $invidualGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, InvidualGroup $invidualGroup)
    {
        return in_array('view-individualGroup', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-individualGroup', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\InvidualGroup  $invidualGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, InvidualGroup $invidualGroup)
    {
        return in_array('update-individualGroup', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\InvidualGroup  $invidualGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, InvidualGroup $invidualGroup)
    {
        return in_array('delete-individualGroup', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\InvidualGroup  $invidualGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, InvidualGroup $invidualGroup)
    {
        return in_array('restore-individualGroup', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\InvidualGroup  $invidualGroup
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, InvidualGroup $invidualGroup)
    {
        return in_array('forceDelete-individualGroup', $this->permissions);
    }
}
