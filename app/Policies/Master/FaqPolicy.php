<?php

namespace App\Policies\Master;

use App\Models\Master\Faq;
use Illuminate\Auth\Access\HandlesAuthorization;

class FaqPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the faq can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */

    /**
     * Determine whether the faq can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Faq $faq)
    {
        return $faq->can('faq:read');
    }

    /**
     * Determine whether the faq can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Faq $faq, Faq $model)
    {
        if (! $model->can('faq:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the faq can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Faq $faq)
    {
        if (! $faq->can('faq:create')) {
            return false;
        }

        return $faq->isEditable();
    }

    /**
     * Determine whether the faq can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Faq $faq, Faq $model)
    {
        if (! $faq->can('faq:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the faq can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Faq $faq, Faq $model)
    {
        if (! $faq->can('faq:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the faq can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Faq $faq, Faq $model)
    {
        //
    }

    /**
     * Determine whether the faq can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Faq $faq, Faq $model)
    {
        //
    }
}
