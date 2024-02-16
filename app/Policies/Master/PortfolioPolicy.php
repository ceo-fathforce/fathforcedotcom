<?php

namespace App\Policies\Master;

use App\Models\Master\Portfolio;
use Illuminate\Auth\Access\HandlesAuthorization;

class PortfolioPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the portfolio can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function preRequisite(Portfolio $portfolio)
    {
        return $portfolio->hasAnyPermission(['portfolio:read', 'portfolio:create', 'portfolio:edit']);
    }

    /**
     * Determine whether the portfolio can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Portfolio $portfolio)
    {
        return $portfolio->can('portfolio:read');
    }

    /**
     * Determine whether the portfolio can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Portfolio $portfolio, Portfolio $model)
    {
        if (! $model->can('portfolio:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the portfolio can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Portfolio $portfolio)
    {
        if (! $portfolio->can('portfolio:create')) {
            return false;
        }

        return $portfolio->isEditable();
    }

    /**
     * Determine whether the portfolio can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Portfolio $portfolio, Portfolio $model)
    {
        if (! $portfolio->can('portfolio:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the portfolio can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Portfolio $portfolio, Portfolio $model)
    {
        if (! $portfolio->can('portfolio:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the portfolio can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Portfolio $portfolio, Portfolio $model)
    {
        //
    }

    /**
     * Determine whether the portfolio can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Portfolio $portfolio, Portfolio $model)
    {
        //
    }
}
