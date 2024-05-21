<?php

namespace App\Policies\Customize;

use App\Models\Customize\Companytext;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanytextPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the companytext can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the companytext can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Companytext $companytext)
    {
        return $companytext->can('companytext:read');
    }

    /**
     * Determine whether the companytext can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Companytext $companytext, Companytext $model)
    {
        if (! $model->can('companytext:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the companytext can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Companytext $companytext)
    {
        if (! $companytext->can('companytext:create')) {
            return false;
        }

        return $companytext->isEditable();
    }

    /**
     * Determine whether the companytext can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Companytext $companytext, Companytext $model)
    {
        if (! $companytext->can('companytext:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the companytext can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Companytext $companytext, Companytext $model)
    {
        if (! $companytext->can('companytext:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the companytext can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Companytext $companytext, Companytext $model)
    {
        //
    }

    /**
     * Determine whether the companytext can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Companytext $companytext, Companytext $model)
    {
        //
    }
}
