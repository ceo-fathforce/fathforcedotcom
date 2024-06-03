<?php

namespace App\Policies\Customize;

use App\Models\Customize\Generalimage;
use Illuminate\Auth\Access\HandlesAuthorization;

class GeneralimagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the generalimage can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the generalimage can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Generalimage $generalimage)
    {
        return $generalimage->can('generalimage:read');
    }

    /**
     * Determine whether the generalimage can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Generalimage $generalimage, Generalimage $model)
    {
        if (! $model->can('generalimage:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the generalimage can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Generalimage $generalimage)
    {
        if (! $generalimage->can('generalimage:create')) {
            return false;
        }

        return $generalimage->isEditable();
    }

    /**
     * Determine whether the generalimage can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Generalimage $generalimage, Generalimage $model)
    {
        if (! $generalimage->can('generalimage:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the generalimage can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Generalimage $generalimage, Generalimage $model)
    {
        if (! $generalimage->can('generalimage:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the generalimage can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Generalimage $generalimage, Generalimage $model)
    {
        //
    }

    /**
     * Determine whether the generalimage can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Generalimage $generalimage, Generalimage $model)
    {
        //
    }
}
