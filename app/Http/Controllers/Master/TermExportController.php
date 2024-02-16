<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\TermListService;
use Illuminate\Http\Request;

class TermExportController extends Controller
{
    public function __invoke(Request $request, TermListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
