<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\ServicelistListService;
use Illuminate\Http\Request;

class ServicelistExportController extends Controller
{
    public function __invoke(Request $request, ServicelistListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
