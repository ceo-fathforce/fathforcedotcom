<?php

namespace App\Policies\Master;

use App\Models\Master\Gallery;
use Illuminate\Auth\Access\HandlesAuthorization;

class GalleryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the gallery can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function preRequisite(Gallery $gallery)
    {
        return $gallery->hasAnyPermission(['gallery:read', 'gallery:create', 'gallery:edit']);
    }

    /**
     * Determine whether the gallery can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Gallery $gallery)
    {
        return $gallery->can('gallery:read');
    }

    /**
     * Determine whether the gallery can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Gallery $gallery, Gallery $model)
    {
        if (! $model->can('gallery:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the gallery can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Gallery $gallery)
    {
        if (! $gallery->can('gallery:create')) {
            return false;
        }

        return $gallery->isEditable();
    }

    /**
     * Determine whether the gallery can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Gallery $gallery, Gallery $model)
    {
        if (! $gallery->can('gallery:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the gallery can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Gallery $gallery, Gallery $model)
    {
        if (! $gallery->can('gallery:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the gallery can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Gallery $gallery, Gallery $model)
    {
        //
    }

    /**
     * Determine whether the gallery can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Gallery $gallery, Gallery $model)
    {
        //
    }
}
