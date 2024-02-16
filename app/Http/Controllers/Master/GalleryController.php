<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\GalleryRequest;
use App\Http\Resources\Master\GalleryResource;
use App\Models\Master\Gallery;
use App\Services\Master\GalleryListService;
use App\Services\Master\GalleryService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function preRequisite(Request $request, GalleryService $service)
    {
        return response()->ok($service->preRequisite($request));
    }

    public function index(Request $request, GalleryListService $service)
    {
        return $service->paginate($request);
    }

    public function store(GalleryRequest $request, GalleryService $service)
    {
        $gallery = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.gallery.gallery')]),
            'gallery' => GalleryResource::make($gallery),
        ]);
    }

    public function show(Gallery $gallery): GalleryResource
    {
        $gallery->load('media');

        return GalleryResource::make($gallery);
    }

    public function update(GalleryRequest $request, Gallery $gallery, GalleryService $service)
    {
        $service->update($request, $gallery);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.gallery.gallery')]),
        ]);
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.gallery.gallery')]),
        ]);
    }

    public function download(Gallery $gallery, $uuid)
    {
        return $gallery->downloadMedia($uuid);
    }
}
