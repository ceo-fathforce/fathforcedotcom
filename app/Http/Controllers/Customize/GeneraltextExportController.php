<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Services\Customize\GeneraltextListService;
use Illuminate\Http\Request;

class GeneraltextExportController extends Controller
{
    public function __invoke(Request $request, GeneraltextListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
