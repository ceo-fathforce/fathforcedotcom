<?php

namespace App\Policies\Customize;

use App\Models\Customize\Companyimage;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyimagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the companyimage can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the companyimage can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Companyimage $companyimage)
    {
        return $companyimage->can('companyimage:read');
    }

    /**
     * Determine whether the companyimage can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Companyimage $companyimage, Companyimage $model)
    {
        if (! $model->can('companyimage:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the companyimage can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Companyimage $companyimage)
    {
        if (! $companyimage->can('companyimage:create')) {
            return false;
        }

        return $companyimage->isEditable();
    }

    /**
     * Determine whether the companyimage can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Companyimage $companyimage, Companyimage $model)
    {
        if (! $companyimage->can('companyimage:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the companyimage can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Companyimage $companyimage, Companyimage $model)
    {
        if (! $companyimage->can('companyimage:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the companyimage can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Companyimage $companyimage, Companyimage $model)
    {
        //
    }

    /**
     * Determine whether the companyimage can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Companyimage $companyimage, Companyimage $model)
    {
        //
    }
}
