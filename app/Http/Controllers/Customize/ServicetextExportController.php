<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Services\Customize\ServicetextListService;
use Illuminate\Http\Request;

class ServicetextExportController extends Controller
{
    public function __invoke(Request $request, ServicetextListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
