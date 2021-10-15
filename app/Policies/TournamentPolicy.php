<?php

namespace App\Policies;

use App\Models\Tournament;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TournamentPolicy
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
        return in_array('viewAny-tournament', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Tournament $tournament)
    {
        return in_array('view-tournament', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-tournament', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Tournament $tournament)
    {
        return in_array('update-tournament', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Tournament $tournament)
    {
        return in_array('delete-tournament', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Tournament $tournament)
    {
        return in_array('restore-tournament', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Tournament  $tournament
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Tournament $tournament)
    {
        return in_array('forceDelete-tournament', $this->permissions);
    }
}
