<?php

namespace App\Imports\Customize;

use App\Concerns\ItemImport;
use App\Models\Customize\Landingimage;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LandingimageImport implements ToCollection, WithHeadingRow
{
  use ItemImport;

  protected $limit = 10;

  public function collection(Collection $rows)
  {
    if (count($rows) > $this->limit) {
      throw ValidationException::withMessages(['message' => trans('general.errors.max_import_limit_crossed', ['attribute' => $this->limit])]);
    }

    $logFile = $this->getLogFile('landingimage');

    $errors = $this->validate($rows);

    $this->checkForErrors('landingimage', $errors);

    if (!request()->boolean('validate') && !Storage::exists($logFile)) {
      $this->import($rows);
    }
  }

  private function import(Collection $rows)
  {
    activity()->disableLogging();

    foreach ($rows as $row) {
      $landingimage = Landingimage::forceCreate([
        'name' => Arr::get($row, 'name'),
      ]);
    }

    activity()->enableLogging();
  }

  private function validate(Collection $rows)
  {
    $errors = [];
    foreach ($rows as $index => $row) {
      $rowNo = $index + 2;

      $title = Arr::get($row, 'name');

      if (!$title) {
        $errors[] = $this->setError($rowNo, trans('customize.landingimage.props.name'), 'required');
      } elseif (strlen($title) < 2 || strlen($title) > 500) {
        $errors[] = $this->setError($rowNo, trans('customize.landingimage.props.name'), 'min_max', ['min' => 2, 'max' => 500]);
      }
    }

    return $errors;
  }
}
