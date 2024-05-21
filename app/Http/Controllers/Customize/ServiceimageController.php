<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customize\ServiceimageRequest;
use App\Http\Resources\Customize\ServiceimageResource;
use App\Models\Customize\Serviceimage;
use App\Services\Customize\ServiceimageListService;
use App\Services\Customize\ServiceimageService;
use Illuminate\Http\Request;
use App\Models\Media;

class ServiceimageController extends Controller
{
    public function index(Request $request, ServiceimageListService $service)
    {
        return $service->paginate($request);
    }

    public function store(ServiceimageRequest $request, ServiceimageService $service)
    {
        $serviceimage = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('customize.serviceimage.serviceimage')]),
            'serviceimage' => ServiceimageResource::make($serviceimage),
        ]);
    }

    public function show(Serviceimage $serviceimage): ServiceimageResource
    {
        $serviceimage->load('media');

        return ServiceimageResource::make($serviceimage);
    }

    public function update(ServiceimageRequest $request, Serviceimage $serviceimage, ServiceimageService $service)
    {
        $service->update($request, $serviceimage);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('customize.serviceimage.serviceimage')]),
        ]);
    }

    public function destroy(Serviceimage $serviceimage)
    {
        $serviceimage->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('customize.serviceimage.serviceimage')]),
        ]);
    }

    public function download(Serviceimage $serviceimage, $uuid)
    {
        return $serviceimage->downloadMedia($uuid);
    }
}
