<?php

namespace App\Policies;

use App\Models\Participant;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ParticipantPolicy
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
        return in_array('viewAny-participant', $this->permissions);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Participant $participant)
    {
        return in_array('view-participant', $this->permissions);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return in_array('create-participant', $this->permissions);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Participant $participant)
    {
        return in_array('update-participant', $this->permissions);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Participant $participant)
    {
        return in_array('delete-participant', $this->permissions);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Participant $participant)
    {
        return in_array('restore-participant', $this->permissions);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Participant $participant)
    {
        return in_array('forceDelete-participant', $this->permissions);
    }
}
