<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Services\Landing\PageCategoryListService;
use Illuminate\Http\Request;

class PageCategoryExportController extends Controller
{
    public function __invoke(Request $request, PageCategoryListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
