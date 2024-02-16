<?php

namespace App\Policies\Master;

use App\Models\Master\Testimony;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestimonyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the testimony can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */


    /**
     * Determine whether the testimony can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Testimony $testimony)
    {
        return $testimony->can('testimony:read');
    }

    /**
     * Determine whether the testimony can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Testimony $testimony, Testimony $model)
    {
        if (! $model->can('testimony:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the testimony can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Testimony $testimony)
    {
        if (! $testimony->can('testimony:create')) {
            return false;
        }

        return $testimony->isEditable();
    }

    /**
     * Determine whether the testimony can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Testimony $testimony, Testimony $model)
    {
        if (! $testimony->can('testimony:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the testimony can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Testimony $testimony, Testimony $model)
    {
        if (! $testimony->can('testimony:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the testimony can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Testimony $testimony, Testimony $model)
    {
        //
    }

    /**
     * Determine whether the testimony can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Testimony $testimony, Testimony $model)
    {
        //
    }
}
