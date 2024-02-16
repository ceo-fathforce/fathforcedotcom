<?php

namespace App\Policies\Master;

use App\Models\Master\PartnerCompany;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartnerCompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the partnercompany can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */


    /**
     * Determine whether the partnercompany can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(PartnerCompany $partnercompany)
    {
        return $partnercompany->can('partnercompany:read');
    }

    /**
     * Determine whether the partnercompany can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(PartnerCompany $partnercompany, PartnerCompany $model)
    {
        if (! $model->can('partnercompany:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the partnercompany can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(PartnerCompany $partnercompany)
    {
        if (! $partnercompany->can('partnercompany:create')) {
            return false;
        }

        return $partnercompany->isEditable();
    }

    /**
     * Determine whether the partnercompany can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(PartnerCompany $partnercompany, PartnerCompany $model)
    {
        if (! $partnercompany->can('partnercompany:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the partnercompany can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(PartnerCompany $partnercompany, PartnerCompany $model)
    {
        if (! $partnercompany->can('partnercompany:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the partnercompany can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(PartnerCompany $partnercompany, PartnerCompany $model)
    {
        //
    }

    /**
     * Determine whether the partnercompany can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(PartnerCompany $partnercompany, PartnerCompany $model)
    {
        //
    }
}
