<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\SuperiorityListService;
use Illuminate\Http\Request;

class SuperiorityExportController extends Controller
{
    public function __invoke(Request $request, SuperiorityListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
