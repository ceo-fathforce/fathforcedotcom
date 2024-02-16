<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Services\Landing\PageImportService;
use Illuminate\Http\Request;

class PageImportController extends Controller
{
    public function __invoke(Request $request, PageImportService $service)
    {
        $service->import($request);

        if (request()->boolean('validate')) {
            return response()->success([
                'message' => trans('general.data_validated'),
            ]);
        }

        return response()->success([
            'imported' => true,
            'message' => trans('global.imported', ['attribute' => trans('landing.page.page')]),
        ]);
    }
}
