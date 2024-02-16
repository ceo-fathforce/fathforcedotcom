<?php

namespace App\Policies\Master;

use App\Models\Master\PartnerSchool;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartnerSchoolPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the partnerschool can get pre-requisite.
   *
   * @return \Illuminate\Auth\Access\Response|bool
   */

  /**
   * Determine whether the partnerschool can view any models.
   *
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function viewAny(PartnerSchool $partnerschool)
  {
    return $partnerschool->can('partnerschool:read');
  }

  /**
   * Determine whether the partnerschool can view the model.
   *
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function view(PartnerSchool $partnerschool, PartnerSchool $model)
  {
    if (!$model->can('partnerschool:read')) {
      return false;
    }

    return $model->isEditable();
  }


  /**
   * Determine whether the partnerschool can create models.
   *
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function create(PartnerSchool $partnerschool)
  {
    if (!$partnerschool->can('partnerschool:create')) {
      return false;
    }

    return $partnerschool->isEditable();
  }

  /**
   * Determine whether the partnerschool can update the model.
   *
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function update(PartnerSchool $partnerschool, PartnerSchool $model)
  {
    if (!$partnerschool->can('partnerschool:edit')) {
      return false;
    }

    return $model->isEditable();
  }

  /**
   * Determine whether the partnerschool can delete the model.
   *
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function delete(PartnerSchool $partnerschool, PartnerSchool $model)
  {
    if (!$partnerschool->can('partnerschool:delete')) {
      return false;
    }

    return $model->isEditable();
  }

  /**
   * Determine whether the partnerschool can restore the model.
   *
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function restore(PartnerSchool $partnerschool, PartnerSchool $model)
  {
    //
  }

  /**
   * Determine whether the partnerschool can permanently delete the model.
   *
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function forceDelete(PartnerSchool $partnerschool, PartnerSchool $model)
  {
    //
  }
}
