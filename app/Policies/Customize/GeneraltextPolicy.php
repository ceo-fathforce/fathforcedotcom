<?php

namespace App\Policies\Customize;

use App\Models\Customize\Generaltext;
use Illuminate\Auth\Access\HandlesAuthorization;

class GeneraltextPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the generaltext can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the generaltext can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Generaltext $generaltext)
    {
        return $generaltext->can('generaltext:read');
    }

    /**
     * Determine whether the generaltext can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Generaltext $generaltext, Generaltext $model)
    {
        if (! $model->can('generaltext:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the generaltext can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Generaltext $generaltext)
    {
        if (! $generaltext->can('generaltext:create')) {
            return false;
        }

        return $generaltext->isEditable();
    }

    /**
     * Determine whether the generaltext can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Generaltext $generaltext, Generaltext $model)
    {
        if (! $generaltext->can('generaltext:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the generaltext can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Generaltext $generaltext, Generaltext $model)
    {
        if (! $generaltext->can('generaltext:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the generaltext can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Generaltext $generaltext, Generaltext $model)
    {
        //
    }

    /**
     * Determine whether the generaltext can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Generaltext $generaltext, Generaltext $model)
    {
        //
    }
}
