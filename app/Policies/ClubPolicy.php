<?php

namespace App\Policies;

use App\Models\Club;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClubPolicy
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
        return in_array('viewAny-club', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Club $club)
    {
        return in_array('view-club', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-club', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Club $club)
    {
        return in_array('update-club', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Club $club)
    {
        return in_array('delete-club', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Club $club)
    {
        return in_array('restore-club', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Club $club)
    {
        return in_array('forceDelete-club', $this->permissions);
    }
}
