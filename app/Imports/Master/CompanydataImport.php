<?php

namespace App\Imports\Master;

use App\Concerns\ItemImport;
use App\Models\Master\Companydata;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CompanydataImport implements ToCollection, WithHeadingRow
{
    use ItemImport;

    protected $limit = 10;

    public function collection(Collection $rows)
    {
        if (count($rows) > $this->limit) {
            throw ValidationException::withMessages(['message' => trans('general.errors.max_import_limit_crossed', ['attribute' => $this->limit])]);
        }

        $logFile = $this->getLogFile('companydata');

        $errors = $this->validate($rows);

        $this->checkForErrors('companydata', $errors);

        if (! request()->boolean('validate') && ! \Storage::exists($logFile)) {
            $this->import($rows);
        }
    }

    private function import(Collection $rows)
    {
        activity()->disableLogging();

        foreach ($rows as $row) {
            $companydata = Companydata::forceCreate([
                'completedprojects' => Arr::get($row, 'completedprojects'),
                'totalproducts' => Arr::get($row, 'totalproducts'),
                'satisfiedcostumers' => Arr::get($row, 'satisfiedcostumers'),
                'employees' => Arr::get($row, 'employees'),
            ]);
        }

        activity()->enableLogging();
    }

    private function validate(Collection $rows)
    {
        $errors = [];
        foreach ($rows as $index => $row) {
            $rowNo = $index + 2;

            $completedprojects = Arr::get($row, 'completedprojects');
            $totalproducts = Arr::get($row, 'totalproducts');
            $satisfiedcostumers = Arr::get($row, 'satisfiedcostumers');
            $employees = Arr::get($row, 'employees');

            if (! $completedprojects) {
                $errors[] = $this->setError($rowNo, trans('master.companydata.props.completedprojects'), 'required');
            } elseif (strlen($completedprojects) < 2 || strlen($completedprojects) > 500) {
                $errors[] = $this->setError($rowNo, trans('master.companydata.props.completedprojects'), 'min_max', ['min' => 2, 'max' => 500]);
            }

            if (! $totalproducts) {
                $errors[] = $this->setError($rowNo, trans('master.companydata.props.totalproducts'), 'required');
            } elseif (strlen($totalproducts) < 2 || strlen($totalproducts) > 500) {
                $errors[] = $this->setError($rowNo, trans('master.companydata.props.totalproducts'), 'min_max', ['min' => 2, 'max' => 500]);
            }

            if (! $satisfiedcostumers) {
                $errors[] = $this->setError($rowNo, trans('master.companydata.props.satisfiedcostumers'), 'required');
            } elseif (strlen($satisfiedcostumers) < 2 || strlen($satisfiedcostumers) > 500) {
                $errors[] = $this->setError($rowNo, trans('master.companydata.props.satisfiedcostumers'), 'min_max', ['min' => 2, 'max' => 500]);
            }

            if (! $employees) {
                $errors[] = $this->setError($rowNo, trans('master.companydata.props.employees'), 'required');
            } elseif (strlen($employees) < 2 || strlen($employees) > 500) {
                $errors[] = $this->setError($rowNo, trans('master.companydata.props.employees'), 'min_max', ['min' => 2, 'max' => 500]);
            }
        }

        return $errors;
    }
}
