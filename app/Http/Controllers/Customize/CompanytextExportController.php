<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Services\Customize\CompanytextListService;
use Illuminate\Http\Request;

class CompanytextExportController extends Controller
{
    public function __invoke(Request $request, CompanytextListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
