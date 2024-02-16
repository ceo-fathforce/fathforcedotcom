<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\SuperiorityImportService;
use Illuminate\Http\Request;

class SuperiorityImportController extends Controller
{
    public function __invoke(Request $request, SuperiorityImportService $service)
    {
        $service->import($request);

        if (request()->boolean('validate')) {
            return response()->success([
                'message' => trans('general.data_validated'),
            ]);
        }

        return response()->success([
            'imported' => true,
            'message' => trans('global.imported', ['attribute' => trans('superiority.superiority')]),
        ]);
    }
}
