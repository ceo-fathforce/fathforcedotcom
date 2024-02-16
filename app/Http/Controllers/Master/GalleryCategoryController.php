<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\GalleryCategoryRequest;
use App\Http\Resources\Master\GalleryCategoryResource;
use App\Models\Master\GalleryCategory;

use App\Services\Master\GalleryCategoryListService;
use App\Services\Master\GalleryCategoryService;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
{
    public function index(Request $request, GalleryCategoryListService $service)
    {
        return $service->paginate($request);
    }

    public function store(GalleryCategoryRequest $request, GalleryCategoryService $service)
    {
        $gallerycategory = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.gallerycategory.gallerycategory')]),
            'gallerycategory' => GalleryCategoryResource::make($gallerycategory),
        ]);
    }

    public function show(GalleryCategory $gallerycategory): GalleryCategoryResource
    {
        return GalleryCategoryResource::make($gallerycategory);
    }

    public function update(GalleryCategoryRequest $request, GalleryCategory $gallerycategory, GalleryCategoryService $service)
    {
        $service->update($request, $gallerycategory);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.gallerycategory.gallerycategory')]),
        ]);
    }

    public function destroy(GalleryCategory $gallerycategory)
    {
        $gallerycategory->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.gallerycategory.gallerycategory')]),
        ]);
    }

    public function download(GalleryCategory $gallerycategory, $uuid)
    {
        return $gallerycategory->downloadMedia($uuid);
    }
}
