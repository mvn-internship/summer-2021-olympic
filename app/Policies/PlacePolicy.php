<?php

namespace App\Policies;

use App\Models\Place;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlacePolicy
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
        return in_array('viewAny-place', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Place $place)
    {
        return in_array('view-place', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-place', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Place $place)
    {
        return in_array('update-place', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Place $place)
    {
        return in_array('delete-place', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Place $place)
    {
        return in_array('restore-place', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Place $place)
    {
        return in_array('forceDelete-place', $this->permissions);
    }
}
