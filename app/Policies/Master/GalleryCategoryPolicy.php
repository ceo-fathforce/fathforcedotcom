<?php

namespace App\Policies\Master;

use App\Models\Master\GalleryCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class GalleryCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the gallerycategory can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function preRequisite(GalleryCategory $gallerycategory)
    {
        return $gallerycategory->hasAnyPermission(['gallerycategory:read', 'gallerycategory:create', 'gallerycategory:edit']);
    }

    /**
     * Determine whether the gallerycategory can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(GalleryCategory $gallerycategory)
    {
        return $gallerycategory->can('gallerycategory:read');
    }

    /**
     * Determine whether the gallerycategory can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(GalleryCategory $gallerycategory, GalleryCategory $model)
    {
        if (! $model->can('gallerycategory:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the gallerycategory can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(GalleryCategory $gallerycategory)
    {
        if (! $gallerycategory->can('gallerycategory:create')) {
            return false;
        }

        return $gallerycategory->isEditable();
    }

    /**
     * Determine whether the gallerycategory can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(GalleryCategory $gallerycategory, GalleryCategory $model)
    {
        if (! $gallerycategory->can('gallerycategory:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the gallerycategory can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(GalleryCategory $gallerycategory, GalleryCategory $model)
    {
        if (! $gallerycategory->can('gallerycategory:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the gallerycategory can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(GalleryCategory $gallerycategory, GalleryCategory $model)
    {
        //
    }

    /**
     * Determine whether the gallerycategory can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(GalleryCategory $gallerycategory, GalleryCategory $model)
    {
        //
    }
}
