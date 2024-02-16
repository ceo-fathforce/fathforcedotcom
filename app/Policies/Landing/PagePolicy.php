<?php

namespace App\Policies\Landing;

use App\Models\Landing\Page;
use Illuminate\Auth\Access\HandlesAuthorization;

class PagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the page can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function preRequisite(Page $page)
    {
        return $page->hasAnyPermission(['page:read', 'page:create', 'page:edit']);
    }

    /**
     * Determine whether the page can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Page $page)
    {
        return $page->can('page:read');
    }

    /**
     * Determine whether the page can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Page $page, Page $model)
    {
        if (! $model->can('page:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the page can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Page $page)
    {
        if (! $page->can('page:create')) {
            return false;
        }

        return $page->isEditable();
    }

    /**
     * Determine whether the page can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Page $page, Page $model)
    {
        if (! $page->can('page:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the page can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Page $page, Page $model)
    {
        if (! $page->can('page:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the page can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Page $page, Page $model)
    {
        //
    }

    /**
     * Determine whether the page can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Page $page, Page $model)
    {
        //
    }
}
