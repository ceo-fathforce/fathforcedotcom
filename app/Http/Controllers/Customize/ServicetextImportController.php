<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Services\Customize\ServicetextImportService;
use Illuminate\Http\Request;

class ServicetextImportController extends Controller
{
    public function __invoke(Request $request, ServicetextImportService $service)
    {
        $service->import($request);

        if (request()->boolean('validate')) {
            return response()->success([
                'message' => trans('general.data_validated'),
            ]);
        }

        return response()->success([
            'imported' => true,
            'message' => trans('global.imported', ['attribute' => trans('servicetext.servicetext')]),
        ]);
    }
}
