<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Services\Customize\LandingtextImportService;
use Illuminate\Http\Request;

class LandingtextImportController extends Controller
{
    public function __invoke(Request $request, LandingtextImportService $service)
    {
        $service->import($request);

        if (request()->boolean('validate')) {
            return response()->success([
                'message' => trans('general.data_validated'),
            ]);
        }

        return response()->success([
            'imported' => true,
            'message' => trans('global.imported', ['attribute' => trans('landingtext.landingtext')]),
        ]);
    }
}
