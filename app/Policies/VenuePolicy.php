<?php

namespace App\Policies;

use App\User;
use App\Venue;
use Illuminate\Auth\Access\HandlesAuthorization;

class VenuePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the venue.
     *
     * @param  \App\User  $user
     * @param  \App\Venue  $venue
     * @return mixed
     */
    public function view(User $user, Venue $venue)
    {
        //
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can create venues.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the venue.
     *
     * @param  \App\User  $user
     * @param  \App\Venue  $venue
     * @return mixed
     */
    public function update(User $user, Venue $venue)
    {
        //
    }

    /**
     * Determine whether the user can delete the venue.
     *
     * @param  \App\User  $user
     * @param  \App\Venue  $venue
     * @return mixed
     */
    public function delete(User $user, Venue $venue)
    {
        //
    }
}
