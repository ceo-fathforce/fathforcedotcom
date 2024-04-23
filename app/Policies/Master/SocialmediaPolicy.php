<?php

namespace App\Policies\Master;

use App\Models\Master\Socialmedia;
use Illuminate\Auth\Access\HandlesAuthorization;

class SocialmediaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the socialmedia can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function preRequisite(Socialmedia $socialmedia)
    {
        return $socialmedia->hasAnyPermission(['socialmedia:read', 'socialmedia:create', 'socialmedia:edit']);
    }

    /**
     * Determine whether the socialmedia can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Socialmedia $socialmedia)
    {
        return $socialmedia->can('socialmedia:read');
    }

    /**
     * Determine whether the socialmedia can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Socialmedia $socialmedia, Socialmedia $model)
    {
        return $socialmedia->can('socialmedia:read');
    }

    /**
     * Determine whether the socialmedia can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Socialmedia $socialmedia)
    {
        return $socialmedia->can('socialmedia:create');
    }

    /**
     * Determine whether the socialmedia can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Socialmedia $socialmedia, Socialmedia $model)
    {
        if (! $socialmedia->can('socialmedia:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the socialmedia can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Socialmedia $socialmedia, Socialmedia $model)
    {
        if (! $socialmedia->can('socialmedia:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the socialmedia can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Socialmedia $socialmedia, Socialmedia $model)
    {
        //
    }

    /**
     * Determine whether the socialmedia can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Socialmedia $socialmedia, Socialmedia $model)
    {
        //
    }
}
