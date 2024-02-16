<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Services\Landing\PageCategoryImportService;
use Illuminate\Http\Request;

class PageCategoryImportController extends Controller
{
    public function __invoke(Request $request, PageCategoryImportService $service)
    {
        $service->import($request);

        if (request()->boolean('validate')) {
            return response()->success([
                'message' => trans('general.data_validated'),
            ]);
        }

        return response()->success([
            'imported' => true,
            'message' => trans('global.imported', ['attribute' => trans('landing.pagecategory.pagecategory')]),
        ]);
    }
}
