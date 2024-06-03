<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customize\GeneralimageRequest;
use App\Http\Resources\Customize\GeneralimageResource;
use App\Models\Customize\Generalimage;
use App\Services\Customize\GeneralimageListService;
use App\Services\Customize\GeneralimageService;
use Illuminate\Http\Request;
use App\Models\Media;

class GeneralimageController extends Controller
{
    public function index(Request $request, GeneralimageListService $service)
    {
        return $service->paginate($request);
    }

    public function store(GeneralimageRequest $request, GeneralimageService $service)
    {
        $generalimage = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('customize.generalimage.generalimage')]),
            'generalimage' => GeneralimageResource::make($generalimage),
        ]);
    }

    public function show(Generalimage $generalimage): GeneralimageResource
    {
        $generalimage->load('media');

        return GeneralimageResource::make($generalimage);
    }

    public function update(GeneralimageRequest $request, Generalimage $generalimage, GeneralimageService $service)
    {
        $service->update($request, $generalimage);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('customize.generalimage.generalimage')]),
        ]);
    }

    public function destroy(Generalimage $generalimage)
    {
        $generalimage->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('customize.generalimage.generalimage')]),
        ]);
    }

    public function download(Generalimage $generalimage, $uuid)
    {
        return $generalimage->downloadMedia($uuid);
    }
}
