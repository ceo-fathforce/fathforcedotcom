<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Services\Customize\CompanytextImportService;
use Illuminate\Http\Request;

class CompanytextImportController extends Controller
{
    public function __invoke(Request $request, CompanytextImportService $service)
    {
        $service->import($request);

        if (request()->boolean('validate')) {
            return response()->success([
                'message' => trans('general.data_validated'),
            ]);
        }

        return response()->success([
            'imported' => true,
            'message' => trans('global.imported', ['attribute' => trans('companytext.companytext')]),
        ]);
    }
}
