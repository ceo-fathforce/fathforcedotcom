<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\PortfolioCategoryImportService;
use Illuminate\Http\Request;

class PortfolioCategoryImportController extends Controller
{
    public function __invoke(Request $request, PortfolioCategoryImportService $service)
    {
        $service->import($request);

        if (request()->boolean('validate')) {
            return response()->success([
                'message' => trans('general.data_validated'),
            ]);
        }

        return response()->success([
            'imported' => true,
            'message' => trans('global.imported', ['attribute' => trans('master.portfoliocategory.portfoliocategory')]),
        ]);
    }
}
