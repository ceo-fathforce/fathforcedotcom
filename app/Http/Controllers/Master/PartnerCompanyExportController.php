<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\PartnerCompanyListService;
use Illuminate\Http\Request;

class PartnerCompanyExportController extends Controller
{
    public function __invoke(Request $request, PartnerCompanyListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
