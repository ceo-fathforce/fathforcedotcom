<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\GalleryListService;
use Illuminate\Http\Request;

class GalleryExportController extends Controller
{
    public function __invoke(Request $request, GalleryListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
