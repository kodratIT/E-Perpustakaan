<?php

namespace App\Policies;

use App\Models\Countries;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CountriesPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view-Any Countries');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Countries $countries): bool
    {
        return $user->can('view Countries');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create Countries');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Countries $countries): bool
    {
        return $user->can('update Countries');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Countries $countries): bool
    {
        return $user->can('delete Countries');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Countries $countries): bool
    {
        return $user->can('restore Countries');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Countries $countries): bool
    {
        return $user->can('forceDelete Countries');
    }
}
