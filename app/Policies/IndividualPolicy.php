<?php

namespace App\Policies;

use App\Models\Individual;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class IndividualPolicy
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
        return in_array('viewAny-individual', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Individual $individual)
    {
        return in_array('view-individual', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-individual', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Individual $individual)
    {
        return in_array('update-individual', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Individual $individual)
    {
        return in_array('delete-individual', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Individual $individual)
    {
        return in_array('restore-individual', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Individual  $individual
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Individual $individual)
    {
        return in_array('forceDelete-individual', $this->permissions);
    }
}
