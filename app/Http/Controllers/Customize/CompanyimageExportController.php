<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Services\Customize\CompanyimageListService;
use Illuminate\Http\Request;

class CompanyimageExportController extends Controller
{
    public function __invoke(Request $request, CompanyimageListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
