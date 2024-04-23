<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\CompanydataRequest;
use App\Http\Resources\Master\CompanydataResource;
use App\Models\Master\Companydata;
use App\Services\Master\CompanydataListService;
use App\Services\Master\CompanydataService;
use Illuminate\Http\Request;

class CompanydataController extends Controller
{
    public function index(Request $request, CompanydataListService $service)
    {
        return $service->paginate($request);
    }

    public function store(CompanydataRequest $request, CompanydataService $service)
    {
        $companydata = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.companydata.companydata')]),
            'companydata' => CompanydataResource::make($companydata),
        ]);
    }

    public function show(Companydata $companydata): CompanydataResource
    {
        $companydata->load('media');

        return CompanydataResource::make($companydata);
    }

    public function update(CompanydataRequest $request, Companydata $companydata, CompanydataService $service)
    {
        $service->update($request, $companydata);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.companydata.companydata')]),
        ]);
    }

    public function destroy(Companydata $companydata)
    {
        $companydata->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.companydata.companydata')]),
        ]);
    }

    public function download(Companydata $companydata, $uuid)
    {
        return $companydata->downloadMedia($uuid);
    }
}
