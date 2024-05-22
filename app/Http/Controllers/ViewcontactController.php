<?php

namespace App\Http\Controllers;

use App\Http\Requests\ViewcontactRequest;
use App\Http\Resources\ViewcontactResource;
use App\Models\Viewcontact;
use App\Services\ViewcontactListService;
use App\Services\ViewcontactService;
use Illuminate\Http\Request;

class ViewcontactController extends Controller
{
    public function index(Request $request, ViewcontactListService $service)
    {
        return $service->paginate($request);
    }

    public function store(ViewcontactRequest $request, ViewcontactService $service)
    {
        $viewcontact = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('viewcontact.viewcontact')]),
            'viewcontact' => ViewcontactResource::make($viewcontact),
        ]);
    }

    public function show(Viewcontact $viewcontact): ViewcontactResource
    {
        $viewcontact->load('media');

        return ViewcontactResource::make($viewcontact);
    }

    public function update(ViewcontactRequest $request, Viewcontact $viewcontact, ViewcontactService $service)
    {
        $service->update($request, $viewcontact);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('viewcontact.viewcontact')]),
        ]);
    }

    public function destroy(Viewcontact $viewcontact)
    {
        $viewcontact->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('viewcontact.viewcontact')]),
        ]);
    }

    public function download(Viewcontact $viewcontact, $uuid)
    {
        return $viewcontact->downloadMedia($uuid);
    }
}
