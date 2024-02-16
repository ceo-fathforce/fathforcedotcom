<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\FaqListService;
use Illuminate\Http\Request;

class FaqExportController extends Controller
{
    public function __invoke(Request $request, FaqListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
