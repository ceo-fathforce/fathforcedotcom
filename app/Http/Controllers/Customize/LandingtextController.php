<?php

namespace App\Http\Controllers\Customize;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customize\LandingtextRequest;
use App\Http\Resources\Customize\LandingtextResource;
use App\Models\Customize\Landingtext;
use App\Services\Customize\LandingtextListService;
use App\Services\Customize\LandingtextService;
use Illuminate\Http\Request;

class LandingtextController extends Controller
{
    public function index(Request $request, LandingtextListService $service)
    {
        return $service->paginate($request);
    }

    public function store(LandingtextRequest $request, LandingtextService $service)
    {
        $landingtext = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('customize.landingtext.landingtext')]),
            'landingtext' => LandingtextResource::make($landingtext),
        ]);
    }

    public function show(Landingtext $landingtext): LandingtextResource
    {

        return LandingtextResource::make($landingtext);
    }

    public function update(LandingtextRequest $request, Landingtext $landingtext, LandingtextService $service)
    {
        $service->update($request, $landingtext);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('customize.landingtext.landingtext')]),
        ]);
    }

    public function destroy(Landingtext $landingtext)
    {
        $landingtext->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('customize.landingtext.landingtext')]),
        ]);
    }


}
