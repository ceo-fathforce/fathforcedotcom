<?php

namespace App\Policies\Master;

use App\Models\Master\Superiority;
use Illuminate\Auth\Access\HandlesAuthorization;

class SuperiorityPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the superiority can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */


    /**
     * Determine whether the superiority can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Superiority $superiority)
    {
        return $superiority->can('superiority:read');
    }

    /**
     * Determine whether the superiority can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Superiority $superiority, Superiority $model)
    {
        if (! $model->can('superiority:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the superiority can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Superiority $superiority)
    {
        if (! $superiority->can('superiority:create')) {
            return false;
        }

        return $superiority->isEditable();
    }

    /**
     * Determine whether the superiority can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Superiority $superiority, Superiority $model)
    {
        if (! $superiority->can('superiority:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the superiority can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Superiority $superiority, Superiority $model)
    {
        if (! $superiority->can('superiority:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the superiority can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Superiority $superiority, Superiority $model)
    {
        //
    }

    /**
     * Determine whether the superiority can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Superiority $superiority, Superiority $model)
    {
        //
    }
}
