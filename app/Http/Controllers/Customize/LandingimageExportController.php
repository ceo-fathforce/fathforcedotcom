<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Services\Customize\LandingimageListService;
use Illuminate\Http\Request;

class LandingimageExportController extends Controller
{
    public function __invoke(Request $request, LandingimageListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
