<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\CompanydataListService;
use Illuminate\Http\Request;

class CompanydataExportController extends Controller
{
    public function __invoke(Request $request, CompanydataListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
