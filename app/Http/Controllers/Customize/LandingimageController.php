<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customize\LandingimageRequest;
use App\Http\Resources\Customize\LandingimageResource;
use App\Models\Customize\Landingimage;
use App\Services\Customize\LandingimageListService;
use App\Services\Customize\LandingimageService;
use Illuminate\Http\Request;
use App\Models\Media;

class LandingimageController extends Controller
{
    public function index(Request $request, LandingimageListService $service)
    {
        return $service->paginate($request);
    }

    public function store(LandingimageRequest $request, LandingimageService $service)
    {
        $landingimage = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('customize.landingimage.landingimage')]),
            'landingimage' => LandingimageResource::make($landingimage),
        ]);
    }

    public function show(Landingimage $landingimage): LandingimageResource
    {
        $landingimage->load('media');

        return LandingimageResource::make($landingimage);
    }

    public function update(LandingimageRequest $request, Landingimage $landingimage, LandingimageService $service)
    {
        $service->update($request, $landingimage);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('customize.landingimage.landingimage')]),
        ]);
    }

    public function destroy(Landingimage $landingimage)
    {
        $landingimage->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('customize.landingimage.landingimage')]),
        ]);
    }

    public function download(Landingimage $landingimage, $uuid)
    {
        return $landingimage->downloadMedia($uuid);
    }
}
