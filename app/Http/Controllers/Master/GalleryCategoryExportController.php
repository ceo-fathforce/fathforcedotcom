<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\GalleryCategoryListService;
use Illuminate\Http\Request;

class GalleryCategoryExportController extends Controller
{
    public function __invoke(Request $request, GalleryCategoryListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
