<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\SocialmediaListService;
use Illuminate\Http\Request;

class SocialmediaExportController extends Controller
{
    public function __invoke(Request $request, SocialmediaListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
