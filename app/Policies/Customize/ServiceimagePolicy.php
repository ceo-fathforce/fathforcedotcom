<?php

namespace App\Policies\Customize;

use App\Models\Customize\Serviceimage;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServiceimagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the serviceimage can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the serviceimage can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Serviceimage $serviceimage)
    {
        return $serviceimage->can('serviceimage:read');
    }

    /**
     * Determine whether the serviceimage can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Serviceimage $serviceimage, Serviceimage $model)
    {
        if (! $model->can('serviceimage:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the serviceimage can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Serviceimage $serviceimage)
    {
        if (! $serviceimage->can('serviceimage:create')) {
            return false;
        }

        return $serviceimage->isEditable();
    }

    /**
     * Determine whether the serviceimage can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Serviceimage $serviceimage, Serviceimage $model)
    {
        if (! $serviceimage->can('serviceimage:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the serviceimage can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Serviceimage $serviceimage, Serviceimage $model)
    {
        if (! $serviceimage->can('serviceimage:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the serviceimage can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Serviceimage $serviceimage, Serviceimage $model)
    {
        //
    }

    /**
     * Determine whether the serviceimage can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Serviceimage $serviceimage, Serviceimage $model)
    {
        //
    }
}
