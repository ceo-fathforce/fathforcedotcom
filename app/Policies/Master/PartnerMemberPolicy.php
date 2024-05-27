<?php

namespace App\Policies\Master;

use App\Models\Master\PartnerMember;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartnerMemberPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the partnermember can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */


    /**
     * Determine whether the partnermember can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(PartnerMember $partnermember)
    {
        return $partnermember->can('partnermember:read');
    }

    /**
     * Determine whether the partnermember can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(PartnerMember $partnermember, PartnerMember $model)
    {
        if (! $model->can('partnermember:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the partnermember can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(PartnerMember $partnermember)
    {
        if (! $partnermember->can('partnermember:create')) {
            return false;
        }

        return $partnermember->isEditable();
    }

    /**
     * Determine whether the partnermember can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(PartnerMember $partnermember, PartnerMember $model)
    {
        if (! $partnermember->can('partnermember:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the partnermember can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(PartnerMember $partnermember, PartnerMember $model)
    {
        if (! $partnermember->can('partnermember:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the partnermember can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(PartnerMember $partnermember, PartnerMember $model)
    {
        //
    }

    /**
     * Determine whether the partnermember can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(PartnerMember $partnermember, PartnerMember $model)
    {
        //
    }
}
