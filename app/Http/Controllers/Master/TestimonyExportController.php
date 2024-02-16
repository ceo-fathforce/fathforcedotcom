<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Services\Master\TestimonyListService;
use Illuminate\Http\Request;

class TestimonyExportController extends Controller
{
    public function __invoke(Request $request, TestimonyListService $service)
    {
        $list = $service->list($request);

        return $service->export($list);
    }
}
