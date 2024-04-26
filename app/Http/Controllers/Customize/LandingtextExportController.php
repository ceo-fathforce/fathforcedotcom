<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Services\Customize\LandingtextListService;
use Illuminate\Http\Request;

class LandingtextExportController extends Controller
{
    public function __invoke(Request $request, LandingtextListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
