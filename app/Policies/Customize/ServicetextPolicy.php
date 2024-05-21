<?php

namespace App\Policies\Customize;

use App\Models\Customize\Servicetext;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicetextPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the servicetext can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the servicetext can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Servicetext $servicetext)
    {
        return $servicetext->can('servicetext:read');
    }

    /**
     * Determine whether the servicetext can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Servicetext $servicetext, Servicetext $model)
    {
        if (! $model->can('servicetext:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the servicetext can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Servicetext $servicetext)
    {
        if (! $servicetext->can('servicetext:create')) {
            return false;
        }

        return $servicetext->isEditable();
    }

    /**
     * Determine whether the servicetext can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Servicetext $servicetext, Servicetext $model)
    {
        if (! $servicetext->can('servicetext:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the servicetext can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Servicetext $servicetext, Servicetext $model)
    {
        if (! $servicetext->can('servicetext:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the servicetext can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Servicetext $servicetext, Servicetext $model)
    {
        //
    }

    /**
     * Determine whether the servicetext can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Servicetext $servicetext, Servicetext $model)
    {
        //
    }
}
