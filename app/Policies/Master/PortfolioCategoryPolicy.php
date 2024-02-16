<?php

namespace App\Policies\Master;

use App\Models\Master\PortfolioCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class PortfolioCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the portfoliocategory can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function preRequisite(PortfolioCategory $portfoliocategory)
    {
        return $portfoliocategory->hasAnyPermission(['portfoliocategory:read', 'portfoliocategory:create', 'portfoliocategory:edit']);
    }

    /**
     * Determine whether the portfoliocategory can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(PortfolioCategory $portfoliocategory)
    {
        return $portfoliocategory->can('portfoliocategory:read');
    }

    /**
     * Determine whether the portfoliocategory can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(PortfolioCategory $portfoliocategory, PortfolioCategory $model)
    {
        if (! $model->can('portfoliocategory:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the portfoliocategory can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(PortfolioCategory $portfoliocategory)
    {
        if (! $portfoliocategory->can('portfoliocategory:create')) {
            return false;
        }

        return $portfoliocategory->isEditable();
    }

    /**
     * Determine whether the portfoliocategory can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(PortfolioCategory $portfoliocategory, PortfolioCategory $model)
    {
        if (! $portfoliocategory->can('portfoliocategory:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the portfoliocategory can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(PortfolioCategory $portfoliocategory, PortfolioCategory $model)
    {
        if (! $portfoliocategory->can('portfoliocategory:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the portfoliocategory can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(PortfolioCategory $portfoliocategory, PortfolioCategory $model)
    {
        //
    }

    /**
     * Determine whether the portfoliocategory can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(PortfolioCategory $portfoliocategory, PortfolioCategory $model)
    {
        //
    }
}
