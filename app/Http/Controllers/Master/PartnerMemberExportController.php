<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\PartnerMemberListService;
use Illuminate\Http\Request;

class PartnerMemberExportController extends Controller
{
    public function __invoke(Request $request, PartnerMemberListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
