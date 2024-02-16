<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\PartnerSchoolListService;
use Illuminate\Http\Request;

class PartnerSchoolExportController extends Controller
{
    public function __invoke(Request $request, PartnerSchoolListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
