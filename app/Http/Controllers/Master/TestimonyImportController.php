<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\TestimonyImportService;
use Illuminate\Http\Request;

class TestimonyImportController extends Controller
{
    public function __invoke(Request $request, TestimonyImportService $service)
    {
        $service->import($request);

        if (request()->boolean('validate')) {
            return response()->success([
                'message' => trans('general.data_validated'),
            ]);
        }

        return response()->success([
            'imported' => true,
            'message' => trans('global.imported', ['attribute' => trans('testimony.testimony')]),
        ]);
    }
}
