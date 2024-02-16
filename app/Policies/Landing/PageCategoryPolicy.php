<?php

namespace App\Policies\Landing;

use App\Models\Landing\PageCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class PageCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the pagecategory can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function preRequisite(PageCategory $pagecategory)
    {
        return $pagecategory->hasAnyPermission(['pagecategory:read', 'pagecategory:create', 'pagecategory:edit']);
    }

    /**
     * Determine whether the pagecategory can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(PageCategory $pagecategory)
    {
        return $pagecategory->can('pagecategory:read');
    }

    /**
     * Determine whether the pagecategory can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(PageCategory $pagecategory, PageCategory $model)
    {
        if (! $model->can('pagecategory:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the pagecategory can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(PageCategory $pagecategory)
    {
        if (! $pagecategory->can('pagecategory:create')) {
            return false;
        }

        return $pagecategory->isEditable();
    }

    /**
     * Determine whether the pagecategory can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(PageCategory $pagecategory, PageCategory $model)
    {
        if (! $pagecategory->can('pagecategory:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the pagecategory can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(PageCategory $pagecategory, PageCategory $model)
    {
        if (! $pagecategory->can('pagecategory:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the pagecategory can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(PageCategory $pagecategory, PageCategory $model)
    {
        //
    }

    /**
     * Determine whether the pagecategory can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(PageCategory $pagecategory, PageCategory $model)
    {
        //
    }
}
