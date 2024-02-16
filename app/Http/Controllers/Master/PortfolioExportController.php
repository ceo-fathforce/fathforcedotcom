<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\PortfolioListService;
use Illuminate\Http\Request;

class PortfolioExportController extends Controller
{
    public function __invoke(Request $request, PortfolioListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
