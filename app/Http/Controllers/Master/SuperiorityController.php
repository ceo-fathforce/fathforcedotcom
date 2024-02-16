<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\SuperiorityRequest;
use App\Http\Resources\Master\SuperiorityResource;
use App\Models\Master\Superiority;
use App\Services\Master\SuperiorityListService;
use App\Services\Master\SuperiorityService;
use Illuminate\Http\Request;

class SuperiorityController extends Controller
{
    public function index(Request $request, SuperiorityListService $service)
    {
        return $service->paginate($request);
    }

    public function store(SuperiorityRequest $request, SuperiorityService $service)
    {
        $superiority = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.superiority.superiority')]),
            'superiority' => SuperiorityResource::make($superiority),
        ]);
    }

    public function show(Superiority $superiority): SuperiorityResource
    {

        return SuperiorityResource::make($superiority);
    }

    public function update(SuperiorityRequest $request, Superiority $superiority, SuperiorityService $service)
    {
        $service->update($request, $superiority);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.superiority.superiority')]),
        ]);
    }

    public function destroy(Superiority $superiority)
    {
        $superiority->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.superiority.superiority')]),
        ]);
    }

}
