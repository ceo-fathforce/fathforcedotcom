<?php

namespace App\Policies\Customize;

use App\Models\Customize\Landingimage;
use Illuminate\Auth\Access\HandlesAuthorization;

class LandingimagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the landingimage can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the landingimage can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Landingimage $landingimage)
    {
        return $landingimage->can('landingimage:read');
    }

    /**
     * Determine whether the landingimage can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Landingimage $landingimage, Landingimage $model)
    {
        if (! $model->can('landingimage:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the landingimage can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Landingimage $landingimage)
    {
        if (! $landingimage->can('landingimage:create')) {
            return false;
        }

        return $landingimage->isEditable();
    }

    /**
     * Determine whether the landingimage can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Landingimage $landingimage, Landingimage $model)
    {
        if (! $landingimage->can('landingimage:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the landingimage can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Landingimage $landingimage, Landingimage $model)
    {
        if (! $landingimage->can('landingimage:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the landingimage can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Landingimage $landingimage, Landingimage $model)
    {
        //
    }

    /**
     * Determine whether the landingimage can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Landingimage $landingimage, Landingimage $model)
    {
        //
    }
}
