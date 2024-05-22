<?php

namespace App\Policies;

use App\Models\Viewcontact;
use Illuminate\Auth\Access\HandlesAuthorization;

class ViewcontactPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the viewcontact can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function preRequisite(Viewcontact $viewcontact)
    {
        return $viewcontact->hasAnyPermission(['viewcontact:read', 'viewcontact:create', 'viewcontact:edit']);
    }

    /**
     * Determine whether the viewcontact can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Viewcontact $viewcontact)
    {
        return $viewcontact->can('viewcontact:read');
    }

    /**
     * Determine whether the viewcontact can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Viewcontact $viewcontact, Viewcontact $model)
    {
        return $viewcontact->can('viewcontact:read');
    }

    /**
     * Determine whether the viewcontact can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Viewcontact $viewcontact)
    {
        return $viewcontact->can('viewcontact:create');
    }

    /**
     * Determine whether the viewcontact can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Viewcontact $viewcontact, Viewcontact $model)
    {
        if (! $viewcontact->can('viewcontact:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the viewcontact can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Viewcontact $viewcontact, Viewcontact $model)
    {
        if (! $viewcontact->can('viewcontact:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the viewcontact can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Viewcontact $viewcontact, Viewcontact $model)
    {
        //
    }

    /**
     * Determine whether the viewcontact can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Viewcontact $viewcontact, Viewcontact $model)
    {
        //
    }
}
