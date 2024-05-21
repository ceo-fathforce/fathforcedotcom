<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customize\ServicetextRequest;
use App\Http\Resources\Customize\ServicetextResource;
use App\Models\Customize\Servicetext;
use App\Services\Customize\ServicetextListService;
use App\Services\Customize\ServicetextService;
use Illuminate\Http\Request;

class ServicetextController extends Controller
{
    public function index(Request $request, ServicetextListService $service)
    {
        return $service->paginate($request);
    }

    public function store(ServicetextRequest $request, ServicetextService $service)
    {
        $servicetext = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('customize.servicetext.servicetext')]),
            'servicetext' => ServicetextResource::make($servicetext),
        ]);
    }

    public function show(Servicetext $servicetext): ServicetextResource
    {

        return ServicetextResource::make($servicetext);
    }

    public function update(ServicetextRequest $request, Servicetext $servicetext, ServicetextService $service)
    {
        $service->update($request, $servicetext);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('customize.servicetext.servicetext')]),
        ]);
    }

    public function destroy(Servicetext $servicetext)
    {
        $servicetext->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('customize.servicetext.servicetext')]),
        ]);
    }


}
