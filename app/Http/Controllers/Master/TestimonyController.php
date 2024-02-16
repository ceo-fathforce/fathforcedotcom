<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\TestimonyRequest;
use App\Http\Resources\Master\TestimonyResource;
use App\Models\Master\Testimony;
use App\Services\Master\TestimonyListService;
use App\Services\Master\TestimonyService;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    public function index(Request $request, TestimonyListService $service)
    {
        return $service->paginate($request);
    }

    public function store(TestimonyRequest $request, TestimonyService $service)
    {
        $testimony = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.testimony.testimony')]),
            'testimony' => TestimonyResource::make($testimony),
        ]);
    }

    public function show(Testimony $testimony): TestimonyResource
    {
        $testimony->load('media');

        return TestimonyResource::make($testimony);
    }

    public function update(TestimonyRequest $request, Testimony $testimony, TestimonyService $service)
    {
        $service->update($request, $testimony);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.testimony.testimony')]),
        ]);
    }

    public function destroy(Testimony $testimony)
    {
        $testimony->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.testimony.testimony')]),
        ]);
    }

    public function download(Testimony $testimony, $uuid)
    {
        return $testimony->downloadMedia($uuid);
    }
}
