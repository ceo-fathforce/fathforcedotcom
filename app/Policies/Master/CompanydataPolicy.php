<?php

namespace App\Policies\Master;

use App\Models\Master\Companydata;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanydataPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the companydata can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function preRequisite(Companydata $companydata)
    {
        return $companydata->hasAnyPermission(['companydata:read', 'companydata:create', 'companydata:edit']);
    }

    /**
     * Determine whether the companydata can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Companydata $companydata)
    {
        return $companydata->can('companydata:read');
    }

    /**
     * Determine whether the companydata can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Companydata $companydata, Companydata $model)
    {
        return $companydata->can('companydata:read');
    }

    /**
     * Determine whether the companydata can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Companydata $companydata)
    {
        return $companydata->can('companydata:create');
    }

    /**
     * Determine whether the companydata can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Companydata $companydata, Companydata $model)
    {
        if (! $companydata->can('companydata:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the companydata can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Companydata $companydata, Companydata $model)
    {
        if (! $companydata->can('companydata:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the companydata can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Companydata $companydata, Companydata $model)
    {
        //
    }

    /**
     * Determine whether the companydata can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Companydata $companydata, Companydata $model)
    {
        //
    }
}
