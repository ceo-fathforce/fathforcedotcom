<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Services\Customize\GeneralimageListService;
use Illuminate\Http\Request;

class GeneralimageExportController extends Controller
{
    public function __invoke(Request $request, GeneralimageListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
