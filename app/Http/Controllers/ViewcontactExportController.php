<?php

namespace App\Http\Controllers;

use App\Services\ViewcontactListService;
use Illuminate\Http\Request;

class ViewcontactExportController extends Controller
{
    public function __invoke(Request $request, ViewcontactListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
