<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customize\CompanyimageRequest;
use App\Http\Resources\Customize\CompanyimageResource;
use App\Models\Customize\Companyimage;
use App\Services\Customize\CompanyimageListService;
use App\Services\Customize\CompanyimageService;
use Illuminate\Http\Request;
use App\Models\Media;

class CompanyimageController extends Controller
{
    public function index(Request $request, CompanyimageListService $service)
    {
        return $service->paginate($request);
    }

    public function store(CompanyimageRequest $request, CompanyimageService $service)
    {
        $companyimage = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('customize.companyimage.companyimage')]),
            'companyimage' => CompanyimageResource::make($companyimage),
        ]);
    }

    public function show(Companyimage $companyimage): CompanyimageResource
    {
        $companyimage->load('media');

        return CompanyimageResource::make($companyimage);
    }

    public function update(CompanyimageRequest $request, Companyimage $companyimage, CompanyimageService $service)
    {
        $service->update($request, $companyimage);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('customize.companyimage.companyimage')]),
        ]);
    }

    public function destroy(Companyimage $companyimage)
    {
        $companyimage->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('customize.companyimage.companyimage')]),
        ]);
    }

    public function download(Companyimage $companyimage, $uuid)
    {
        return $companyimage->downloadMedia($uuid);
    }
}
