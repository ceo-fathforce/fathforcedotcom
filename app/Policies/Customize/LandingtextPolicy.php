<?php

namespace App\Policies\Customize;

use App\Models\Customize\Landingtext;
use Illuminate\Auth\Access\HandlesAuthorization;

class LandingtextPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the landingtext can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the landingtext can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Landingtext $landingtext)
    {
        return $landingtext->can('landingtext:read');
    }

    /**
     * Determine whether the landingtext can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Landingtext $landingtext, Landingtext $model)
    {
        if (! $model->can('landingtext:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the landingtext can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Landingtext $landingtext)
    {
        if (! $landingtext->can('landingtext:create')) {
            return false;
        }

        return $landingtext->isEditable();
    }

    /**
     * Determine whether the landingtext can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Landingtext $landingtext, Landingtext $model)
    {
        if (! $landingtext->can('landingtext:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the landingtext can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Landingtext $landingtext, Landingtext $model)
    {
        if (! $landingtext->can('landingtext:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the landingtext can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Landingtext $landingtext, Landingtext $model)
    {
        //
    }

    /**
     * Determine whether the landingtext can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Landingtext $landingtext, Landingtext $model)
    {
        //
    }
}
