<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\PartnerMemberRequest;
use App\Http\Resources\Master\PartnerMemberResource;
use App\Models\Master\PartnerMember;
use App\Services\Master\PartnerMemberListService;
use App\Services\Master\PartnerMemberService;
use Illuminate\Http\Request;

class PartnerMemberController extends Controller
{
    public function index(Request $request, PartnerMemberListService $service)
    {
        return $service->paginate($request);
    }

    public function store(PartnerMemberRequest $request, PartnerMemberService $service)
    {
        $partnermember = $service->create($request);

        return response()->success([
            'message' => trans('global.created', ['attribute' => trans('master.partnermember.partnermember')]),
            'partnermember' => PartnerMemberResource::make($partnermember),
        ]);
    }

    public function show(PartnerMember $partnermember): PartnerMemberResource
    {
        $partnermember->load('media');

        return PartnerMemberResource::make($partnermember);
    }

    public function update(PartnerMemberRequest $request, PartnerMember $partnermember, PartnerMemberService $service)
    {
        $service->update($request, $partnermember);

        return response()->success([
            'message' => trans('global.updated', ['attribute' => trans('master.partnermember.partnermember')]),
        ]);
    }

    public function destroy(PartnerMember $partnermember)
    {
        $partnermember->delete();

        return response()->success([
            'message' => trans('global.deleted', ['attribute' => trans('master.partnermember.partnermember')]),
        ]);
    }

    public function download(PartnerMember $partnermember, $uuid)
    {
        return $partnermember->downloadMedia($uuid);
    }
}
