<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserMatch;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserMatchPolicy
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
        return in_array('viewAny-userMatch', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserMatch  $userMatch
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, UserMatch $userMatch)
    {
        return in_array('view-userMatch', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-userMatch', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserMatch  $userMatch
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, UserMatch $userMatch)
    {
        return in_array('update-userMatch', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserMatch  $userMatch
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, UserMatch $userMatch)
    {
        return in_array('delete-userMatch', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserMatch  $userMatch
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, UserMatch $userMatch)
    {
        return in_array('restore-userMatch', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\UserMatch  $userMatch
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, UserMatch $userMatch)
    {
        return in_array('forceDelete-userMatch', $this->permissions);
    }
}
