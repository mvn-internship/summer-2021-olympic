<?php

namespace App\Policies;

use App\Models\Province;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProvincePolicy
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
        return in_array('viewAny-province', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Province $province)
    {
        return in_array('view-province', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-province', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Province $province)
    {
        return in_array('update-province', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Province $province)
    {
        return in_array('delete-province', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Province $province)
    {
        return in_array('restore-province', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Province $province)
    {
        return in_array('forceDelete-province', $this->permissions);
    }
}
