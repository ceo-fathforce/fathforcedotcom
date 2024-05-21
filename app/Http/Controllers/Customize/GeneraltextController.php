<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customize\GeneraltextRequest;
use App\Http\Resources\Customize\GeneraltextResource;
use App\Models\Customize\Generaltext;
use App\Services\Customize\GeneraltextListService;
use App\Services\Customize\GeneraltextService;
use Illuminate\Http\Request;

class GeneraltextController extends Controller
{
    public function index(Request $request, GeneraltextListService $service)
    {
        return $service->paginate($request);
    }

    public function store(GeneraltextRequest $request, GeneraltextService $service)
    {
        $generaltext = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('customize.generaltext.generaltext')]),
            'generaltext' => GeneraltextResource::make($generaltext),
        ]);
    }

    public function show(Generaltext $generaltext): GeneraltextResource
    {

        return GeneraltextResource::make($generaltext);
    }

    public function update(GeneraltextRequest $request, Generaltext $generaltext, GeneraltextService $service)
    {
        $service->update($request, $generaltext);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('customize.generaltext.generaltext')]),
        ]);
    }

    public function destroy(Generaltext $generaltext)
    {
        $generaltext->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('customize.generaltext.generaltext')]),
        ]);
    }


}
