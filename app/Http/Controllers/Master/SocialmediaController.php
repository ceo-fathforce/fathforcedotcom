<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\SocialmediaRequest;
use App\Http\Resources\Master\SocialmediaResource;
use App\Models\Master\Socialmedia;
use App\Services\Master\SocialmediaListService;
use App\Services\Master\SocialmediaService;
use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    public function index(Request $request, SocialmediaListService $service)
    {
        return $service->paginate($request);
    }

    public function store(SocialmediaRequest $request, SocialmediaService $service)
    {
        $socialmedia = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.socialmedia.socialmedia')]),
            'socialmedia' => SocialmediaResource::make($socialmedia),
        ]);
    }

    public function show(Socialmedia $socialmedia): SocialmediaResource
    {
        $socialmedia->load('media');

        return SocialmediaResource::make($socialmedia);
    }

    public function update(SocialmediaRequest $request, Socialmedia $socialmedia, SocialmediaService $service)
    {
        $service->update($request, $socialmedia);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.socialmedia.socialmedia')]),
        ]);
    }

    public function destroy(Socialmedia $socialmedia)
    {
        $socialmedia->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.socialmedia.socialmedia')]),
        ]);
    }

    public function download(Socialmedia $socialmedia, $uuid)
    {
        return $socialmedia->downloadMedia($uuid);
    }
}
