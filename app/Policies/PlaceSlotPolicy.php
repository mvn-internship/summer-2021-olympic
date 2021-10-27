<?php

namespace App\Policies;

use App\Models\PlaceSlot;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlaceSlotPolicy
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
        return in_array('viewAny-placeSlot', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PlaceSlot  $placeSlot
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PlaceSlot $placeSlot)
    {
        return in_array('view-placeSlot', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-placeSlot', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PlaceSlot  $placeSlot
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PlaceSlot $placeSlot)
    {
        return in_array('update-placeSlot', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PlaceSlot  $placeSlot
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PlaceSlot $placeSlot)
    {
        return in_array('delete-placeSlot', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PlaceSlot  $placeSlot
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PlaceSlot $placeSlot)
    {
        return in_array('restore-placeSlot', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PlaceSlot  $placeSlot
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PlaceSlot $placeSlot)
    {
        return in_array('forceDelete-placeSlot', $this->permissions);
    }
}
