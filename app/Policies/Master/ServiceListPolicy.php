<?php

namespace App\Policies\Master;

use App\Models\Master\Servicelist;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicelistPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the servicelist can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the servicelist can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Servicelist $servicelist)
    {
        return $servicelist->can('servicelist:read');
    }

    /**
     * Determine whether the servicelist can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Servicelist $servicelist, Servicelist $model)
    {
        if (! $model->can('servicelist:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the servicelist can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Servicelist $servicelist)
    {
        if (! $servicelist->can('servicelist:create')) {
            return false;
        }

        return $servicelist->isEditable();
    }

    /**
     * Determine whether the servicelist can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Servicelist $servicelist, Servicelist $model)
    {
        if (! $servicelist->can('servicelist:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the servicelist can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Servicelist $servicelist, Servicelist $model)
    {
        if (! $servicelist->can('servicelist:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the servicelist can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Servicelist $servicelist, Servicelist $model)
    {
        //
    }

    /**
     * Determine whether the servicelist can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Servicelist $servicelist, Servicelist $model)
    {
        //
    }
}
