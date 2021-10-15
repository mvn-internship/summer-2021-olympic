<?php

namespace App\Policies;

use App\Models\PointRule;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PointRulePolicy
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
        return in_array('viewAny-pointRule', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PointRule  $pointRule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PointRule $pointRule)
    {
        return in_array('view-pointRule', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-pointRule', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PointRule  $pointRule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PointRule $pointRule)
    {
        return in_array('update-pointRule', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PointRule  $pointRule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PointRule $pointRule)
    {
        return in_array('delete-pointRule', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PointRule  $pointRule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PointRule $pointRule)
    {
        return in_array('restore-pointRule', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PointRule  $pointRule
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PointRule $pointRule)
    {
        return in_array('forceDelete-pointRule', $this->permissions);
    }
}
