<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Services\Customize\ServiceimageListService;
use Illuminate\Http\Request;

class ServiceimageExportController extends Controller
{
    public function __invoke(Request $request, ServiceimageListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
