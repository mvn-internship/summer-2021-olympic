<?php

namespace App\Policies;

use App\Models\RankRule;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RankRulePolicy
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
        return in_array('viewAny-rankRule', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RankRule  $rankRule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, RankRule $rankRule)
    {
        return in_array('view-rankRule', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-rankRule', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RankRule  $rankRule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, RankRule $rankRule)
    {
        return in_array('update-rankRule', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RankRule  $rankRule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, RankRule $rankRule)
    {
        return in_array('delete-rankRule', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RankRule  $rankRule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, RankRule $rankRule)
    {
        return in_array('restore-rankRule', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RankRule  $rankRule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, RankRule $rankRule)
    {
        return in_array('forceDelete-rankRule', $this->permissions);
    }
}
