<?php

namespace App\Http\Controllers;

use App\Services\ViewcontactImportService;
use Illuminate\Http\Request;

class ViewcontactImportController extends Controller
{
    public function __invoke(Request $request, ViewcontactImportService $service)
    {
        $service->import($request);

        if (request()->boolean('validate')) {
            return response()->success([
                'message' => trans('general.data_validated'),
            ]);
        }

        return response()->success([
            'imported' => true,
            'message' => trans('global.imported', ['attribute' => trans('viewcontact.viewcontact')]),
        ]);
    }
}
