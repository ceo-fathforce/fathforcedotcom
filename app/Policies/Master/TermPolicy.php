<?php

namespace App\Policies\Master;

use App\Models\Master\Term;
use Illuminate\Auth\Access\HandlesAuthorization;

class TermPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the term can get pre-requisite.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */


    /**
     * Determine whether the term can view any models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Term $term)
    {
        return $term->can('term:read');
    }

    /**
     * Determine whether the term can view the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Term $term, Term $model)
    {
        if (! $model->can('term:read')) {
            return false;
        }

        return $model->isEditable();
    }


    /**
     * Determine whether the term can create models.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Term $term)
    {
        if (! $term->can('term:create')) {
            return false;
        }

        return $term->isEditable();
    }

    /**
     * Determine whether the term can update the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Term $term, Term $model)
    {
        if (! $term->can('term:edit')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the term can delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Term $term, Term $model)
    {
        if (! $term->can('term:delete')) {
            return false;
        }

        return $model->isEditable();
    }

    /**
     * Determine whether the term can restore the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Term $term, Term $model)
    {
        //
    }

    /**
     * Determine whether the term can permanently delete the model.
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Term $term, Term $model)
    {
        //
    }
}
