<?php

namespace App\Policies;

use App\Models\PenatlyCard;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PenatlyCardPolicy
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
        return in_array('viewAny-penaltyCard', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PenatlyCard  $penatlyCard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PenatlyCard $penatlyCard)
    {
        return in_array('view-penaltyCard', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-penaltyCard', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PenatlyCard  $penatlyCard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PenatlyCard $penatlyCard)
    {
        return in_array('update-penaltyCard', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PenatlyCard  $penatlyCard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PenatlyCard $penatlyCard)
    {
        return in_array('delete-penaltyCard', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PenatlyCard  $penatlyCard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PenatlyCard $penatlyCard)
    {
        return in_array('restore-penaltyCard', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PenatlyCard  $penatlyCard
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PenatlyCard $penatlyCard)
    {
        return in_array('forceDelete-penaltyCard', $this->permissions);
    }
}
