<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\PortfolioCategoryListService;
use Illuminate\Http\Request;

class PortfolioCategoryExportController extends Controller
{
    public function __invoke(Request $request, PortfolioCategoryListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
