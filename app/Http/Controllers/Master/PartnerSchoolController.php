<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\PartnerSchoolRequest;
use App\Http\Resources\Master\PartnerSchoolResource;
use App\Models\Master\PartnerSchool;
use App\Services\Master\PartnerSchoolListService;
use App\Services\Master\PartnerSchoolService;
use Illuminate\Http\Request;

class PartnerSchoolController extends Controller
{
    public function index(Request $request, PartnerSchoolListService $service)
    {

        return $service->paginate($request);
    }

    public function store(PartnerSchoolRequest $request, PartnerSchoolService $service)
    {
        $partnerschool = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.partnerschool.partnerschool')]),
            'partnerschool' => PartnerSchoolResource::make($partnerschool),
        ]);
    }

    public function show(PartnerSchool $partnerschool): PartnerSchoolResource
    {
        $partnerschool->load('media');

        return PartnerSchoolResource::make($partnerschool);
    }

    public function update(PartnerSchoolRequest $request, PartnerSchool $partnerschool, PartnerSchoolService $service)
    {
        $service->update($request, $partnerschool);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.partnerschool.partnerschool')]),
        ]);
    }

    public function destroy(PartnerSchool $partnerschool)
    {
        $partnerschool->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.partnerschool.partnerschool')]),
        ]);
    }

    public function download(PartnerSchool $partnerschool, $uuid)
    {
        return $partnerschool->downloadMedia($uuid);
    }
}
