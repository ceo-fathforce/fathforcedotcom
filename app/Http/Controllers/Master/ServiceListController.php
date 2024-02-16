<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\ServicelistRequest;
use App\Http\Resources\Master\ServicelistResource;
use App\Models\Master\Servicelist;
use App\Services\Master\ServicelistListService;
use App\Services\Master\ServicelistService;
use Illuminate\Http\Request;

class ServicelistController extends Controller
{
    public function index(Request $request, ServicelistListService $service)
    {
        return $service->paginate($request);
    }

    public function store(ServicelistRequest $request, ServicelistService $service)
    {
        $servicelist = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.servicelist.servicelist')]),
            'servicelist' => ServicelistResource::make($servicelist),
        ]);
    }

    public function show(Servicelist $servicelist): ServicelistResource
    {
        $servicelist->load('media');

        return ServicelistResource::make($servicelist);
    }

    public function update(ServicelistRequest $request, Servicelist $servicelist, ServicelistService $service)
    {
        $service->update($request, $servicelist);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.servicelist.servicelist')]),
        ]);
    }

    public function destroy(Servicelist $servicelist)
    {
        $servicelist->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.servicelist.servicelist')]),
        ]);
    }

    public function download(Servicelist $servicelist, $uuid)
    {
        return $servicelist->downloadMedia($uuid);
    }
}
