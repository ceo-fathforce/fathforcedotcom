<?php

namespace App\Services\Master;

use App\Models\Master\Companydata;
use Illuminate\Http\Request;

class CompanydataService
{
    public function create(Request $request): Companydata
    {
        $companydata = Companydata::forceCreate($this->formatParams($request));

        $companydata->addMedia($request);

        return $companydata;
    }

    private function formatParams(Request $request, ?Companydata $companydata = null): array
    {
        return [
            'completedprojects' => $request->completedprojects,
            'totalproducts' => $request->totalproducts,
            'satisfiedcostumers' => $request->satisfiedcostumers,
            'employees' => $request->employees,
        ];
    }

    public function update(Request $request, Companydata $companydata): void
    {
        $companydata->forceFill($this->formatParams($request, $companydata))->save();

        $companydata->updateMedia($request);
    }

    public function deletable(Companydata $companydata): void
    {
    }
}
