<?php

namespace App\Policies;

use App\Models\CompetitionType;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompetitionTypePolicy
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
        return in_array('viewAny-competitionType', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CompetitionType  $competitionType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, CompetitionType $competitionType)
    {
        return in_array('view-competitionType', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-competitionType', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CompetitionType  $competitionType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, CompetitionType $competitionType)
    {
        return in_array('update-competitionType', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CompetitionType  $competitionType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, CompetitionType $competitionType)
    {
        return in_array('delete-competitionType', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CompetitionType  $competitionType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, CompetitionType $competitionType)
    {
        return in_array('restore-competitionType', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\CompetitionType  $competitionType
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, CompetitionType $competitionType)
    {
        return in_array('forceDelete-competitionType', $this->permissions);
    }
}
