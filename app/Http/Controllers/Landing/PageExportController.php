<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Services\Landing\PageListService;
use Illuminate\Http\Request;

class PageExportController extends Controller
{
    public function __invoke(Request $request, PageListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
